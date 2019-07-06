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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/catagory', function () {
    return view('catagory');
});
Route::get('/single-post', function () {
    return view('single-post');
});
Route::get('/elements', function () {
    return view('elements');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
