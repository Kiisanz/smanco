<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Settings;
use App\Http\Controllers\Post;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Login;
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

//Homepage
Route::get('/', [BlogController::class, 'index']);
Route::get('/blog/{post:slug}', [BlogController::class, 'show']);



//Login register auth
Route::get('/register', [Register::class, 'index']);
Route::post('/register/add', [Register::class, 'register']);
Route::get('/register/success', [Register::class, 'suc']
);
Route::get('/login', [AdminController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [Login::class, 'auth']);
Route::post('/logout', [Login::class, 'logout']);


//Dashboard 
Route::get('/dashboard', [Dashboard::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/myposts',[BlogController::class, 'all'])->middleware('auth');
Route::get('/dashboard/lists', [Dashboard::class, 'lists'])->middleware('auth');
Route::get('/dashboard/settings', [Dashboard::class, 'setting'])->middleware('auth');
Route::get('/dashboard/myaccount', [Dashboard::class, 'account'])->middleware('auth');
Route::get('/dashboard/myposts/new', [Dashboard::class, 'create'])->middleware('auth');
Route::post('/myposts/new/add', [Post::class, 'create'])->middleware('auth');
Route::put('/dashboard/settings/update', [Dashboard::class, 'store'])->middleware('auth');
Route::put('/dashboard/myposts/{post:slug}/edit/save', [BlogController::class, 'update'])->middleware('auth');
  Route::get('/dashboard/myposts/{post:slug}/edit', [BlogController::class, 'edit'])->middleware('auth');
  Route::delete('/dashboard/myposts/{post:slug}/delete', [BlogController::class, 'destroy'])->middleware('auth');

  