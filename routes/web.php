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



Route::get('home', 'DashboardController@home')->name('home');
Route::get('industri', 'DashboardController@industri')->name('industri');
Route::get('kost', 'DashboardController@kost')->name('kost');
Route::get('kuliner', 'DashboardController@kuliner')->name('kuliner');
Route::get('laundry', 'DashboardController@laundry')->name('laundry');
Route::get('minimarket', 'DashboardController@minimarket')->name('minimarket');
Route::get('transport', 'DashboardController@transport')->name('transport');
Route::get('wisata', 'DashboardController@wisata')->name('wisata');
