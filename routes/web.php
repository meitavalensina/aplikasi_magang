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

//-------------------------------------SISI ADMIN--------------------------------------------
Route::get('/dashboard-admin', 'AdminController@index');
Route::get('/industri-admin', 'AdminController@view_industri');
Route::get('/createindustri-admin', 'AdminController@create_industri');
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
