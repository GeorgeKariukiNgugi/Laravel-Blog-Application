<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/LogIn',function(){
      return view('auth\login');
});

Route::get('singleBlog',function(){
    return view('users\singleBlog');
});

// Route::resource('/users','Admin\UserController');

Route::group(array( 'prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'),function(){
    Route::resource('/users','UserController');
});