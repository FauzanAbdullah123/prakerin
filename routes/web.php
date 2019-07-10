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
    return view('frontend.index');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/catagory', function () {
    return view('frontend.catagory');
});
Route::get('/elements', function () {
    return view('frontend.elements');
});
Route::get('/albums', function () {
    return view('frontend.albums');
});
Route::get('/siswa', function () {
    return view('siswa');
});


Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function() {
            return view('admin.index');
        });
        Route::resource('/kategori', 'CategoryController');
        Route::resource('/tag', 'TagKontroller');
        Route::resource('/artikel', 'ArtikelController');
    }
);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    