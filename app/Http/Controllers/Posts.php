<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class Posts extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('./dashboard/posts', [
        'title' => 'Dashboard - My Posts',
        'posts' => blog::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $post)
    {
      dd($post);
        return view('dashboard/edit', [
        'title' => 'Edit Post',
        'posts' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $post)
    {
        blog::destroy($post->id);
        return redirect('/dashboard/myposts');
    }
}
