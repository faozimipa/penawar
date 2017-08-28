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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'daftar', 'namespace' => 'Pendaftaran', 'middleware' => 'guest'], function () {
    Route::get('/index', ['uses' => 'DaftarController@index', 'as' => 'pendaftaran.user']);
    Route::post('/index', ['uses' => 'DaftarController@create', 'as' => 'pendaftaran.user.create']);

    Route::post('/login',['uses' => 'MasukController@login', 'as' => 'pendaftaran.login.post']);
});


Route::group(['prefix' => 'd', 'namespace' => 'Demand'], function () {
    Route::get('/permintaan-penawaran',['uses' => 'DemandController@permintaan', 'as' => 'pp.request']);
    Route::post('/permintaan-penawaran',['uses' => 'DemandController@permintaan_post', 'as' => 'pp.request.post']);
});