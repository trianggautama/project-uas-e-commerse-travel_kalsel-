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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'destinasiController@index');
Route::get('/harga/{id}', 'destinasiController@tesharga');
Route::get('/about', 'destinasiController@about');


// halaman admin

//destinasi
Route::get('/admin/dashboard', 'adminController@index');
Route::get('/admin/destinasi', 'adminController@destinasi_index');
Route::get('/admin/destinasi_tambah', 'adminController@destinasi_tambah');
Route::post('/admin/destinasi_tambah', 'adminController@destinasi_store');
Route::get('/admin/{id}/destinasi_edit', 'adminController@destinasi_edit');
Route::put('/admin/{id}/destinasi_edit','adminController@destinasi_update');
Route::get('/admin/destinasi-print', 'adminController@destinasi_print');
Route::delete('/admin/destinasi/{id}/delete', 'adminController@delete_destinasi');

//jadwal
Route::get('/admin/jadwal', 'adminController@jadwal_index');
Route::post('/admin/jadwal', 'adminController@jadwal_store');
Route::get('/admin/{id}/jadwal_edit', 'adminController@jadwal_edit');
Route::put('/admin/{id}/jadwal_edit','adminController@jadwal_update');
Route::delete('/admin/jadwal/{id}/delete', 'adminController@delete_jadwal');

//pesan
Route::get('/detail/{id}', 'destinasiController@detail_index');
Route::get('/detail/pesan/{id}', 'destinasiController@pesan_index');
Route::post('/pesan/{id}', 'destinasiController@pesan_store');

//pesanan
Route::get('/admin/pesanan', 'adminController@pesanan_index');
