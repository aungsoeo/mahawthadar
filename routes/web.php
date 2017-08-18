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

/*** Admin Panel ***/
Route::group(['prefix' => 'admin'], function(){
	Auth::routes();
	Route::group(['middleware' => 'IsAdmin'], function(){
		//Route::get('/', 'HomeController@index')->name('Admin Home');
		Route::get('/', ['as' => 'admin.index', 'uses' => 'HomeController@index']);
		
		Route::get('/dosth', ['as' => 'admin.dosth', 'uses' => 'HomeController@dosth']);
	});
});
/*******/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
