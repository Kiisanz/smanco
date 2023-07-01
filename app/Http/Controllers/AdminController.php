<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
      return view('login');
    }
    
    public function auth(Request $request):RedirectResponse
    {
   
        $credentials = $request->validate([
          'email'=> 'required|email',
          'password' => 'required'
          ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
       
            return redirect()->intended('/dashboard');
        }
 
        return back()->with('err', 'Incorrect email or password')->onlyInput('email');
    }
      public function register(Request $request){
      User::create($request->all());
      return redirect('/register/success');
}

}