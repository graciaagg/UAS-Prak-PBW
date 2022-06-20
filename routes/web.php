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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['auth']], function (){

    Route::get('/dosen', 'DosenController@dosen');
    
    Route::get('/dosen/cari', 'DosenController@pencarian');
    
    Route::get('/dosen/add', 'DosenController@add');
    
    Route::post('/dosen/simpan', 'DosenController@simpan');
    
    Route::get('/dosen/edit/{id}', 'DosenController@edit');
    
    Route::post('/dosen/update/{id}', 'DosenController@update');

    Route::post('/dosen/delete/{id}', 'DosenController@delete');
    
    Route::get('/user','AuthController@user');

    Route::get('/user/cariuser','AuthController@pencarian');
    
    Route::get('/user/adduser','AuthController@adduser');
    
    Route::post('/user/simpanuser','AuthController@simpanuser');

    Route::get('/user/edituser/{id}', 'AuthController@edit');
    
    Route::post('/user/updateuser/{id}', 'AuthController@update');

    Route::get('/user/deleteuser/{id}', 'AuthController@delete');
    });
    
    
    Route::get('/user/login','AuthController@login')->name('login')->middleware('guest');
    
    Route::post('/user/ceklogin','AuthController@ceklogin')->middleware('guest');
    
    Route::get('/logout','AuthController@logout')->middleware('auth');
    