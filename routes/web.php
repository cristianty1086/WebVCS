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
use vcsweb\Role;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/registrar', function () {
    $roles = Role::all(); 
    return view('auth/register',['roles'=>$roles]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/roles', 'HomeController@roles')->name('roles')->middleware('auth');
Route::get('/camaras_ip', 'CamarasIpController@camaras_ip')->name('camaras_ip')->middleware('auth');
Route::get('/usuarios', 'UsuarioController@usuarios')->name('usuarios')->middleware('auth');

Route::get('/nueva_camara', 'CamarasIpController@nueva_camaras_ip')->name('nueva_camaras_ip')->middleware('auth');
Route::post('/add_camera', 'CamarasIpController@add_camara')->name('add_camara')->middleware('auth');
Route::get('/edit_camera/{camera_id}', 'CamarasIpController@edit')->name('camaras_ip.edit')->middleware('auth');
Route::post('/post_camara', 'CamarasIpController@update')->name('post_camara')->middleware('auth');

Route::get('/analisis', 'HomeController@analisis')->name('analisis')->middleware('auth');

Route::get('/nuevo_usuario', 'UsuarioController@nuevo_usuario')->name('nuevo_usuario')->middleware('auth');
Route::post('/nuevo_usuario', 'UsuarioController@store')->name('store_usuario')->middleware('auth');
