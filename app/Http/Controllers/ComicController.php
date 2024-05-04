<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index', [
            'comics' => comic::all(),
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
    public function store(Request $request)
    {
        $data = $request->all();

        comic::create($data);

        return to_route('comics.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(comic $comic)
    {

        //dd(comic::find($comic));

        return view('users.show', [
            'comic' => $comic,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comic $comic)
    {
        //
    }
}
