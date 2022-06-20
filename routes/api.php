<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::get('/user/admin/gudang/level1', 'UserController@index')->name('user');

//return redirect(route('user'));

Route::get('/dosen/all', 'DosenAPIController@all');

Route::post('/dosen/create', 'DosenAPIController@create');

Route::post('/dosen/update/{id}', 'DosenAPIController@update');

Route::delete('/dosen/delete/{id}', 'DosenAPIController@delete');