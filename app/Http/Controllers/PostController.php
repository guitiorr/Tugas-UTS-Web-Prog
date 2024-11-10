<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('main-page', ['posts' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(POst $pOst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, POst $pOst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(POst $pOst)
    {
        //
    }
}
