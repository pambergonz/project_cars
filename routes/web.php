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


Route::get('/models','CarModelsController@index')->middleware('auth');
Route::get('/model/create','CarModelsController@create')->middleware('auth','Admin');
Route::get('/model/show/{id}','CarModelsController@show')->middleware('auth');
Route::get('/model/edit/{id}','CarModelsController@edit')->middleware('auth','Admin');
Route::post('/model/store','CarModelsController@store')->middleware('auth', 'Admin');
Route::put('/model/update/{id}','CarModelsController@update')->middleware('auth','Admin');
Route::delete('/model/destroy/{id}','CarModelsController@destroy')->middleware('auth','Admin');

Route::get('/brands','BrandsController@index')->middleware('auth');
Route::get('/brand/create','BrandsController@create')->middleware('auth','Admin');
Route::get('/brand/show/{id}','BrandsController@show')->middleware('auth');
Route::get('/brand/edit/{id}','BrandsController@edit')->middleware('auth','Admin');
Route::post('/brand/store','BrandsController@store')->middleware('auth','Admin');
Route::put('/brand/update/{id}','BrandsController@update')->middleware('auth','Admin');
Route::delete('/brand/destroy/{id}','BrandsController@destroy')->middleware('auth','Admin');


Route::get('/users','UsersController@index')->middleware('auth','Admin');
Route::get('/user/create','UsersController@create')->middleware('auth','Admin');
Route::get('/user/show/{id}','UsersController@show')->middleware('auth','Admin');
Route::get('/user/edit/{id}','UsersController@edit')->middleware('auth','Admin');
Route::post('/user/store','UsersController@store')->middleware('auth','Admin');
Route::put('/user/update/{id}','UsersController@update')->middleware('auth','Admin');
Route::delete('/user/destroy/{id}','UsersController@destroy')->middleware('auth','Admin');

Route::get('laravel-send-email', 'EmailController@sendEMail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
