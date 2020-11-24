<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.layouts.master');
});

Route::get('dashboard', 'DashboardController@home')->name('dashboard');
//-------------------------------------SISI ADMIN--------------------------------------------
Route::get('/dashboard-admin', 'AdminController@index');

//industri
Route::get('/industri-admin', 'AdminController@view_industri')->name('industri-admin');
Route::get('/createindustri-admin', 'AdminController@create_industri');
Route::post('/prosescreateindustri-admin', 'AdminController@prosescreate');
Route::get('/editindustri-admin/{kode_industri}', 'AdminController@edit_industri');
Route::patch('proseseditindustri-admin/{kode_industri}', 'AdminController@post_editin');
Route::get('/hapus-industri-admin/{kode_industri}', 'AdminController@destroy');

//kuliner
Route::get('/kuliner-admin', 'AdminController@view_kuliner')->name('kuliner-admin');
Route::get('/create-kuliner-admin', 'AdminController@create_kuliner');
Route::post('/proses-createkuliner-admin', 'AdminController@proseskuliner');
Route::get('/editkuliner-admin/{kode_kuliner}', 'AdminController@edit_kuliner');
Route::patch('proseseditkuliner-admin/{kode_kuliner}', 'AdminController@post_kuliner');
Route::get('/hapus-kuliner-admin/{kode_kuliner}', 'AdminController@hapuskul');

//minimarket
Route::get('/minimarket-admin', 'AdminController@view_minimarket')->name('minimarket-admin');
Route::get('/create-minimarket-admin', 'AdminController@create_minimarket');
Route::post('/proses-create-minimar-admin', 'AdminController@proses_market');
Route::get('/edit-minimar-admin/{kode_minimarket}', 'AdminController@edit_minimarket');
Route::patch('proses-editminimar-admin/{kode_minimarket}', 'AdminController@post_minimarket');
Route::get('/hapus-minimarket-admin/{kode_minimarket}', 'AdminController@hapusmm');
Route::get('/editindustri-admin', 'AdminController@edit_industri');

//kost
Route::get('/kost-admin', 'AdminController@view_kost');
Route::get('/createkost-admin', 'AdminController@create_kost');
Route::post('/storekost-admin', 'AdminController@store_kost');
Route::get('/editkost-admin/{id}', 'AdminController@edit_kost');
Route::post('/updatekost-admin/{id}', 'AdminController@update_kost');
Route::get('/hapuskost-admin/{id}', 'AdminController@hapus_kost');

//wisata
Route::get('/wisata-admin', 'AdminController@view_wisata');
Route::get('/createwisata-admin', 'AdminController@create_wisata');
Route::post('/storewisata-admin', 'AdminController@store_wisata');
Route::get('/editwisata-admin/{id}', 'AdminController@edit_wisata');
Route::post('/updatewisata-admin/{id}', 'AdminController@update_wisata');
Route::get('/hapuswisata-admin/{id}', 'AdminController@hapus_wisata');

//laundry
Route::get('/laundry-admin', 'AdminController@view_laundry');
Route::get('/createlaundry-admin', 'AdminController@create_laundry');
Route::post('/storelaundry-admin', 'AdminController@store_laundry');
Route::get('/editlaundry-admin/{id}', 'AdminController@edit_laundry');
Route::post('/updatelaundry-admin/{id}', 'AdminController@update_laundry');
Route::get('/hapuslaundry-admin/{id}', 'AdminController@hapus_laundry');

//Tips Trik
Route::get('/tipstrik-admin', 'AdminController@view_tipstrik');
Route::get('/createtipstrik-admin', 'AdminController@create_tipstrik');
Route::post('/storetipstrik-admin', 'AdminController@store_tipstrik');
Route::get('/edittipstrik-admin/{id}', 'AdminController@edit_tipstrik');
Route::post('/updatetipstrik-admin/{id}', 'AdminController@update_tipstrik');
Route::get('/hapustipstrik-admin/{id}', 'AdminController@hapus_tipstrik');

//------------------------------------LANDING Page----------------------------
Route::get('home', 'DashboardController@home')->name('home');
Route::get('industri', 'DashboardController@industri')->name('industri');
Route::get('kost', 'DashboardController@kost')->name('kost');
Route::get('kuliner', 'DashboardController@kuliner')->name('kuliner');
Route::get('laundry', 'DashboardController@laundry')->name('laundry');
Route::get('minimarket', 'DashboardController@minimarket')->name('minimarket');
Route::get('transport', 'DashboardController@transport')->name('transport');
Route::get('wisata', 'DashboardController@wisata')->name('wisata');
