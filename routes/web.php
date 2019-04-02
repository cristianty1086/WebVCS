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
use vcsweb\role;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/registrar', function () {
    $roles = role::all();
    return view('auth/register',['roles'=>$roles]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/roles', 'HomeController@roles')->name('roles')->middleware('auth');
Route::get('/camaras_ip', 'CamarasIpController@camaras_ip')->name('camaras_ip')->middleware('auth');
Route::get('/usuarios', 'UsuarioController@usuarios')->name('usuarios')->middleware('auth');

Route::get('/nueva_camara', 'CamarasIpController@nueva_camaras_ip')->name('nueva_camaras_ip')->middleware('auth');
Route::post('/add_camera', 'CamarasIpController@post_camara')->name('post_camara')->middleware('auth');
Route::get('/camaras_ip/{camera_id}/edit', 'CamarasIpController@edit')->name('camaras_ip.edit')->middleware('auth');

Route::get('/analisis', 'HomeController@analisis')->name('analisis')->middleware('auth');

