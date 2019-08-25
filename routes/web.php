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

// Route::get('/', function () {
//     return view('frontend.index');
// });
// Route::get('/contact', function () {
//     return view('frontend.contact');
// });
// Route::get('/catagory', function () {
//     return view('frontend.catagory');
// });
// Route::get('/elements', function () {
//     return view('frontend.elements');
// });
// Route::get('/events', function () {
//     return view('frontend.events');
// });


Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function() {
            return view('admin.index');
        });
        Route::resource('/kategori', 'CategoryController');
        Route::resource('/tag', 'TagKontroller');
        Route::resource('/artikel', 'ArtikelKontroller');
        Route::resource('/event', 'EventKontroller');
    }
);

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/contact', function () {
        return view('frontend.contact');
    });

    Route::get('/events', 'FrontendController@event')->name('event');
    Route::get('/blog', 'FrontendController@allblog')->name('all.blog');
    Route::get('/blog/{artikel}', 'FrontendController@detailblog')->name('detail.blog');
    Route::get('/blog/kategori/{cat}', 'FrontendController@blogcat')->name('cat.blog');
    Route::get('/blog/tag/{tag}', 'FrontendController@blogtag')->name('tag.blog');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
