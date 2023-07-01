<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\person;
class Register extends Controller
{
    public function index(){
      return view('register', [
        'title' => 'Register'
        ]);
    }
    
    public function register(Request $request){
      $validateData = $request->validate([
        'nama' => 'required|max:255',
        'kelas' => 'required',
        'gender' => 'required',
        'alasan' => 'required|min:20'
        ]);
      
      person::create($validateData);
      return redirect('/register/success');
    }
}
