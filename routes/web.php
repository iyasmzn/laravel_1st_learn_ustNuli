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

Route::get('/', function (){
    return view('welcome');
});
Route::get('/test/{name?}', function($name = 'John'){
	return 'HEEELLOWWW '.$name."!!!";
});
Route::get('/user', 'UserController@index');
Route::get('category','CategoryController@index');
Route::get('category/create','CategoryController@create');