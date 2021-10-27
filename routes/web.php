<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::group(['perfix' => 'user','as'=>'user.'], function(){

        Route::get('/user/dashboard',[ UserController::class,'dashboard']);

        // Route::get('/users', 'UserController@index');
        // Route::get('/user/add', 'UserController@getAdd');
        // Route::post('/user/add', 'UserController@postAdd');
        // Route::get('/user/edit/{id}', 'UserController@getEdit');
        // Route::post('/user/edit/{id}', 'UserController@postEdit');
  
});