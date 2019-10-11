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
Route::get('/', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate');
Route::get('/logout', 'LoginController@logout');
Route::get('/subjects','SubjectsController@index');
Route::get('/subjects/add','SubjectsController@create');
Route::post('/subjects/store','SubjectsController@store');
Route::get('/strands','StrandsController@index');
Route::get('/strands/add','StrandsController@create');
Route::post('/strands/store','StrandsController@store');
Route::get('/teachers','TeachersController@index');
Route::get('/teachers/add','TeachersController@create');
Route::post('/teachers/store','TeachersController@store');
Route::get('/teachers/{teacher}/edit','TeachersController@edit');