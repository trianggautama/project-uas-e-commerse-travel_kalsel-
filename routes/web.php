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
Route::get('/index', 'destinasiController@index');
Route::get('/pesan/{id}', 'destinasiController@pesan');
Route::get('/jadwal', 'destinasiController@jadwal');
Route::get('/harga/{id}', 'destinasiController@tesharga');

// halaman admin

//destinasi
Route::get('/admin/dashboard', 'adminController@index');
Route::get('/admin/destinasi', 'adminController@destinasi_index');
Route::get('/admin/destinasi-print', 'adminController@destinasi_print');

//jadwal
Route::get('/admin/jadwal', 'adminController@jadwal_index');
Route::post('/admin/jadwal', 'adminController@jadwal_store');
Route::get('/admin/{id}/jadwal_edit', 'adminController@jadwal_edit');
Route::put('/admin/{id}/jadwal_edit','adminController@jadwal_update');
Route::delete('/admin/jadwal/{id}/delete', 'adminController@delete_jadwal');
