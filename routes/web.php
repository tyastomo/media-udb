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


Route::get('/', 'LandingController@index');
Route::resource('landing', 'LandingController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mapel','MapelController')->middleware('auth');

Route::resource('bagian','BagianController')->middleware('auth');
