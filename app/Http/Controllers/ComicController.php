<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;

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
        //$data = $request->all();

        /**
         * validating data
         */
        // $val_data = $request->validate([
        //     'title' => 'required|min:8|max:100',
        //     'description' => 'required|min:40|max:2000',
        //     'thumb' => 'required|url',
        //     'price' => 'nullable|numeric',
        //     'series' => 'nullable|min:5|max:30',
        //     'sale_date' => 'nullable',
        //     'type' => 'nullable|min:5|max:30',
        // ]);
        $val_data = $request->validated();

        Comic::create($request->all());

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
        //dd($request->all(), $comic);
        // $val_data = $request->validate([
        //     'title' => 'required|min:10|max:100',
        //     'description' => 'required|min:40|max:2000',
        //     'thumb' => 'required|url',
        //     'price' => 'nullable|numeric',
        //     'series' => 'nullable|min:5|max:30',
        //     'sale_date' => 'nullable',
        //     'type' => 'nullable|min:5|max:30',
        // ]);
        $val_data = $request->validated();

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
