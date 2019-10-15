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

Route::get('/models','CarModelsController@index');
Route::get('/model/create','CarModelsController@create')->middleware('auth','Admin');
Route::get('/model/show/{id}','CarModelsController@show');
Route::get('/model/edit/{id}','CarModelsController@edit')->middleware('auth','Admin');
Route::post('/model/store','CarModelsController@store');
Route::put('/model/update/{id}','CarModelsController@update');
Route::delete('/model/destroy/{id}','CarModelsController@destroy');

Route::get('/brands','BrandsController@index');
Route::get('/brand/create','BrandsController@create')->middleware('auth','Admin');
Route::get('/brand/show/{id}','BrandsController@show');
Route::get('/brand/edit/{id}','BrandsController@edit')->middleware('auth','Admin');
Route::post('/brand/store','BrandsController@store');
Route::put('/brand/update/{id}','BrandsController@update');
Route::delete('/brand/destroy/{id}','BrandsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
