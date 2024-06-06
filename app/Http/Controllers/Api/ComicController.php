<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index (){
        $allComics = Comic::orderByDesc('id')->paginate();

        if($allComics){
            return request()->json([
                'success' => true,
                'results' => $allComics,
            ], 200);
        }
        else {
            return request()->json([
                'success' => false,
                'results' => '404 content not found',
            ], 404);
        }

    }

    public function show ($id){
        $showItem = Comic::find($id);
        if($showItem){
            return request()->json([
                'success' => true,
                'results' => $showItem,
            ], 200);
        }
        else {
            return request()->json([
                'success' => false,
                'results' => '404 content not found',
            ], 404);
        }
    }
};
