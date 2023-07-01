<?php

namespace App\Http\Controllers;
use App\Models\blog;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function create(Request $request){
      $newPost = $request->validate([
        'title' => 'required|max:255',
        'author' => 'required',
        'image' => 'image|file|max:5120',
        'slug' => 'required|max:255',
        'description' => 'required|min:30',
        'body' => 'required'
        ]);
        
        if ($request->file('image')) {
          $newPost['image'] = $request->file('image')->store('post-images');
        }
      
      blog::create($newPost);
      return redirect('/dashboard/myposts');
    }
    public function edit(blog $post){
      
    }
    
    
    
    public function update(Request $request, blog $post){
      $npost = $request->validate([
        'image' => 'image|file|max:5120'
        ]);
        
        if ($request->file('image')) {
          $newPost['image'] = $request->file('image')->store('post-images');
        }
      
      blog::where('id', '{{ $post->id }}')->update($npost);
      return redirect('/dashboard/myposts');
    }
}
