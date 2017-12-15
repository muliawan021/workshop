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
Route::get('/','inventarisController@index');

Route::get('/inventaris/create', function () {
    return view('create');
});
Route::post('/inventaris/create','inventarisController@create');
Route::get('/inventaris/index','inventarisController@index');
Route::get('/inventaris/{id}/edit','inventarisController@edit');
Route::post('inventaris/{id}/update','inventarisController@update');
Route::get('inventaris/{id}/delete','inventarisController@delete');