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

#view yang akan ditampilakan
Route::get('/', function () {
    return view('index');
});

#view dari register
Route::get('/signup', function(){
	return view('register');
});

#view dari home

Route::get('/home', function(){
	return view('home');
})->middleware("auth");

Route::get('/signout', function(){
	Auth::logout();
	return redirect('/');
})->middleware("auth");

Route::post('/signup', 'SimpleController@register');
Route::post('/signin','SimpleController@login');
