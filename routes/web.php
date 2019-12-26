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
    return view('admin.layouts.app');
});
Route::get('/test/{name?}', function($name = 'John'){
	return 'HEEELLOWWW '.$name."!!!";
});
Route::get('/user', 'UserController@index');
Route::get('category','CategoryController@index');
Route::get('category/create','CategoryController@create');
Route::post('category/store','CategoryController@store');
Route::get('category/edit/{id}','CategoryController@edit');
Route::post('category/update/{id}','CategoryController@update');
Route::get('category/delete/{id}','CategoryController@delete');
Route::get('article','ArticleController@index');
Route::get('article/add','ArticleController@add');
Route::get('article/delete/{id}','ArticleController@delete');
