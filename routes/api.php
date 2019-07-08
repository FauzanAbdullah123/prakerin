<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('contoh', 'contohAPI@index');
// Route::get('contoh2', 'contohAPI@index2');
Route::resource('contoh', 'contohAPI');
Route::resource('sekolah', 'SekolahController');
Route::resource('siswa', 'SiswaController');
Route::resource('ajaxkategori', 'KategoriController');
Route::resource('ajaxtag', 'TagController');
Route::resource('ajaxartikel', 'ArtikelController');