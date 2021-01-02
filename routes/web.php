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



Auth::routes();
Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/create', 'HomeController@create')->name('create')->middleware('auth');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit')->middleware('auth');
Route::get('/add', 'HomeController@add')->name('add')->middleware('auth');
Route::get('/editsave/{id}', 'HomeController@editSave')->middleware('auth');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete')->middleware('auth');
