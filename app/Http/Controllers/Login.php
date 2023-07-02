<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function auth(Request $request)
    {
      $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'Email or password incorrect',
        ])->onlyInput('email');
    }
    
    public function logout(Request $request){
 
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
    }
}
