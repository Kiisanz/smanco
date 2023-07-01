<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Settings;
use App\Http\Controllers\Post;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Register;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogController::class, 'index']);
Route::get('/blog/{post:slug}', [BlogController::class, 'show']);
Route::get('/register', [Register::class, 'index']);

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/myposts',[BlogController::class, 'all']);
Route::get('/dashboard/lists', [Dashboard::class, 'lists']);
Route::get('/dashboard/settings', [Dashboard::class, 'setting']);
Route::get('/dashboard/myaccount', [Dashboard::class, 'account']);
Route::get('/dashboard/myposts/new', [Dashboard::class, 'create']);
Route::post('/myposts/new/add', [Post::class, 'create']);

Route::post('/register/add', [Register::class, 'register']);
Route::get('/register/success', function (){
  return view('succes');
});

Route::put('/dashboard/settings/update', [Dashboard::class, 'store']);

Route::put('/dashboard/myposts/{post:slug}/edit/save', [BlogController::class, 'update']);
  Route::get('/dashboard/myposts/{post:slug}/edit', [BlogController::class, 'edit']);
  Route::delete('/dashboard/myposts/{post:slug}/delete', [BlogController::class, 'destroy']);

  Route::get('/login', [AdminController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [AdminController::class, 'auth']);