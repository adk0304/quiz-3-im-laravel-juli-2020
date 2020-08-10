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
//     return view('layouts/erd');


// });
// Route::get('/a', function () {
//     return view('layouts/konten');
// });


Route::get('/', 'ProyekController@index'); // menampilkan halaman ERD
Route::get('/proyek', 'ProyekController@dataproyek'); // menampilkan data proyek
Route::get('/proyek/create', 'ProyekController@create'); // tambah proyek
Route::post('/proyek/store', 'ProyekController@store'); // tambah proyek




