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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{id}', 'HomeController@prcdata')->name('prcdata');

Route::put('/home/{id}', 'HomeController@update')->name('update');

Route::get('/new', 'HomeController@new')->name('new');

Route::post('/store', 'HomeController@store');


