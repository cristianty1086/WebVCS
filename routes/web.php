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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/roles', 'HomeController@roles')->name('roles')->middleware('auth');
Route::get('/camaras_ip', 'CamarasIpController@camaras_ip')->name('camaras_ip')->middleware('auth');
Route::get('/nueva_camara', 'CamarasIpController@nueva_camaras_ip')->name('nueva_camaras_ip')->middleware('auth');
Route::post('/add_camera/{request}', 'CamarasIpController@post_camara')->name('post_camara')->middleware('auth');
Route::get('/analisis', 'HomeController@analisis')->name('analisis')->middleware('auth');

