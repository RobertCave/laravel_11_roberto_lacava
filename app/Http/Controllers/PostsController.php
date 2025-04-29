<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::all();

        return view('post.index', ['posts' => $posts] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Posts::create([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'body' => $request->input('body'),
            'img' => $request->file('img')->store('images', 'public'),
       


        ]);

        // //Cosa fa dopo aver salvato sul database ?
        return redirect()->route('post.index')->with('successMessage', 'Hai correttamente inserito in database');


    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
