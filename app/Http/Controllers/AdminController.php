<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blog;
use App\Models\Pengaturan;

class AdminController extends Controller
{
    public function index(){
      return view('login');
    }
    
    public function tes()
    {
      return view('homepage');
    }
      public function register(Request $request){
      User::create($request->all());
      return redirect('/register/success');
}

}