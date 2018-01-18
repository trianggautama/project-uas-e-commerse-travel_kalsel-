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
Route::get('/langkah_pemesanan', 'destinasiController@langkah_pemesanan');


// halaman admin

Route::group(['middleware' => 'auth'], function(){

  //destinasi
  Route::get('/admin/dashboard', 'adminController@index');
  Route::get('/admin/destinasi', 'adminController@destinasi_index');
  Route::get('/admin/destinasi_tambah', 'adminController@destinasi_tambah');
  Route::post('/admin/destinasi_tambah', 'adminController@destinasi_store');
  Route::get('/admin/{id}/destinasi_edit', 'adminController@destinasi_edit');
  Route::put('/admin/{id}/destinasi_edit','adminController@destinasi_update');
  Route::get('/admin/laporan/destinasi-print', 'adminController@destinasi_print');
  Route::delete('/admin/destinasi/{id}/delete', 'adminController@delete_destinasi');
  Route::put('/konfirmasi/{id}','adminController@konfirmasi');
  Route::get('/admin/detail_jadwal/{id}', 'adminController@jadwal_detail');

  //jadwal
  Route::get('/admin/jadwal', 'adminController@jadwal_index');
  Route::post('/admin/jadwal', 'adminController@jadwal_store');
  Route::get('/admin/{id}/jadwal_edit', 'adminController@jadwal_edit');
  Route::put('/admin/{id}/jadwal_edit','adminController@jadwal_update');
  Route::delete('/admin/jadwal/{id}/delete', 'adminController@delete_jadwal');
  Route::get('/admin/laporan/jadwal-print', 'adminController@jadwal_print');




  //pesanan
  Route::get('/admin/pesanan', 'adminController@pesanan_index');
  Route::get('/admin/transaksi', 'adminController@transaksi_index');
  Route::get('/admin/detailpesanan/{id}', 'adminController@pesanan_detail');
  Route::delete('/admin/pesanan/{id}/delete', 'adminController@delete_pesanan');
  Route::get('/admin/laporan/pesanan-print', 'adminController@pesanan_print');

  //inbox
  Route::get('/admin/inbox', 'adminController@inbox_index');
  Route::get('/admin/read/{id}', 'adminController@read_index');
  Route::post('/read/{id}/balas', 'adminController@balas_pesan');

});

//pesan(messege)
Route::get('/konfirmasi', 'destinasiController@konfirmasi_index');
Route::post('/kirim-pesan/', 'destinasiController@kirimpesan');
Route::get('/detail/{id}', 'destinasiController@detail_index');
Route::get('/detail/pesan/{id}', 'destinasiController@pesan_index');
Route::post('/pesan/{id}', 'destinasiController@pesan_store');
