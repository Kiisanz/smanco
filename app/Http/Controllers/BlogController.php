<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\Dashboard;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('homepage', [
        'title' => 'Home',
        'blogPosts' => blog::all(),
        ]);
    }
    
    public function show(blog $post)
    {
      return view('post', [
        'title' => 'Post',
        'post' => $post
        ]);
    }
    
    public function all(){
     
      return view('dashboard/posts', [
        'title'=>'Dashboard - Mypost',
        'posts' => blog::all()
        ]);
    }
    
    public function edit(blog $post){
      
      return view('dashboard/edit', [
        'title' => 'Edit Post',
        'posts' => $post,
        ]);
    }
    
    public function update(Request $request, blog $post){
      $npost = $request->validate([
        'title' => 'required|max:255',
        'author' => 'required',
        'image' => 'image|file|max:5120',
        'slug' => 'required|max:255',
        'description' => 'required|min:30',
        'body' => 'required'
        ]);
        
        if($post->image != null){
          Storage::delete($post->image);
        }
        
        if ($request->file('image')) {
          $npost['image'] = $request->file('image')->store('post-images');
        }
      
      blog::where('id', $post->id)->update($npost);
      return redirect('/dashboard/myposts');
    }
    
    public function destroy(blog $post)
    {
      if($post->image){
        Storage::delete($post->image);
      }
        blog::destroy($post->id);
        return redirect('/dashboard/myposts');
    }
}
