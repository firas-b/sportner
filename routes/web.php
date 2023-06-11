<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Postscontroller;
use App\Http\Controllers\Usercontroller;

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

// Route::get('/',[Postscontroller::class,'index']);
// Route::get('/posts/create',[Postscontroller::class,'create']);
// Route::post('/posts/store',[Postscontroller::class,'store']);



Route::get('/',[Postscontroller::class,'index']);
Route::resource('posts',Postscontroller::class)->except('index' ,'manage');

Route::get('/posts_manage',[Postscontroller::class,'manage'])->name('manage');


//shwo register form 
Route::get('/register', [Usercontroller::class,'register']);
//create new user ;
Route::post('/user' ,[Usercontroller::class,'create']);

// show login form
Route::get('/login', [Usercontroller::class,'login']);
// authnticate user
Route::post ('/user/authenticate',[Usercontroller::class,'authenticate']);
//logout user 
Route::get('/user/logout', [Usercontroller::class,'logout']);