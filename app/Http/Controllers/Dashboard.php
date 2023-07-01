<?php

namespace App\Http\Controllers;
use App\Models\Pengaturan;
use App\Models\person;
use App\Models\blog;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){

      return view('./dashboard/index', [
        'title' => 'Dashboard - Home',
        'users' => person::all(),
         'male' => person::where('gender', 'Laki-Laki')->get(),
        'female' => person::where('gender', 'Perempuan')->get(),
        'other' => person::where('gender', 'Lainya')->get()
        ]);
    }
    
    public function posts(){
      
    }
    
    public function lists() {
      return view('./dashboard/users_list', [
        'title' => 'Dashboad - Data Anggota',
        'users' => person::all()
        ]);
    }
    
    public function account(){
      return view('./dashboard/account', [
        'title'=> 'Dashboard - Akun'
        ]);
    }
    
    public function setting(){
      $pengaturan = Pengaturan::all();
      foreach ($pengaturan as $settings)
      return view('./dashboard/settings',[
        'title' => 'settings',
        'setting' => $settings
        ]);
    }
    
    public function up(Request $request){
      Pengaturan::update($request->all());
      return redirect('/dashboard/settings');
    }
    
    public function create(){
      return view('./dashboard/create_post', [
        'title' => 'Dashboard - New Post'
        ]);
    }
    
    public function store(Pengaturan $set, Request $request){
      $settings = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required',
        'address' => 'required',
        'group' => 'required',
        'instagram' => 'required',
        'facebook' => 'required'
        ]);
      
      Pengaturan::where('id', 1)->update($settings);
      return redirect('/dashboard/settings');
    } 
    
    public function edit(blog $post){
      $pengaturan = Pengaturan::all();
      foreach ($pengaturan as $settings)
      return view('./dashboard/edit',[
        'title' => 'settings',
        'posts' => $settings
        ]);
    }
}