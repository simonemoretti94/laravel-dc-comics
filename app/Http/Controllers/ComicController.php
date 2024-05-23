<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.index', [
        //     'comics' => Comic::all(),
        // ]);
        return view('admin.index', [
            'comics' => Comic::orderByDesc('id')->paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        /**
         * validated into App\Http\Requests\StoreProjectRequest
         */
        $val_data = $request->validated(); // istead of validate() 'cause they were validated into StoreComicRequest

        /**
         * saving img into uploads folder
         */
        $img_path = Storage::put('uploads', $request->thumb); //in case of img uploaded
        $val_data['thumb'] = $img_path;

        Comic::create($val_data);

        return redirect('/comics')->with('message', 'Comic creation succeeded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        //dd(Comic::find($comic));

        return view('users.show', [
            'comic' => $comic,
        ]);
    }

    /**
     * Show the form in order to edit the specified resource.
     */
    public function edit(Comic $comic)
    {

        //dd($comic);

        return view('admin.edit', [
            'comic' => $comic,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $val_data = $request->validated();

        if ($request->has('thumb')) {
            /**
             * checking if current post has a thumb
             */
            if ($comic->thumb) {
                //if so delete it
                Storage::delete($comic->thumb);
            }

            //uploading a new image
            $img_path = Storage::put('uploads', $request->thumb);
            $val_data['thumb'] = $img_path;
        }

        $comic->update($val_data);

        return redirect('/comics')->with('message', 'Comic edit succeeded');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //dd($comic);
        $comic->delete();

        return to_route('comics.index');
    }
}
