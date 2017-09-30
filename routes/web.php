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
	Route::group(['namespace' => 'Admin', 'middleware' => 'IsAdmin'], function(){
		//Route::get('/', 'HomeController@index')->name('Admin Home');
		Route::get('/', ['as' => 'admin.index', 'uses' => 'HomeController@index']);
		
		Route::get('/category', ['as' => 'admin.category', 'uses' => 'CategoryController@index']);

		Route::get('/category/create', ['as' => 'admin.category.create', 'uses' => 'CategoryController@create']);

		Route::post('/category/create', ['as' => 'admin.category.store', 'uses' => 'CategoryController@store']);

		Route::get('/post', ['as' => 'admin.post', 'uses' => 'PostController@index']);

		Route::get('/post/create', ['as' => 'admin.post.create', 'uses' => 'PostController@create']);

		Route::post('/post/create', ['as' => 'admin.post.store', 'uses' => 'PostController@store']);
		// add route for post update by ASO
		Route::get('/post/{id}/edit', ['as' => 'admin.post.edit', 'uses' => 'PostController@edit']);

		Route::post('/post/{id}/update', ['as' => 'admin.post.update', 'uses' => 'PostController@update']);

		Route::get('/post/{id}/show', ['as' => 'admin.post.show', 'uses' => 'PostController@show']);

		Route::get('/post/{id}/delete', ['as' => 'admin.post.delete', 'uses' => 'PostController@delete']);

		Route::post('/post/search',array('as'=>'admin.post.search','uses'=>'PostController@search'));
	});
});
/*******/

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['as' => 'user.index', 'uses' => 'HomeController@index']);

// route for post book
Route::get('/book', ['as' => 'book.index', 'uses' => 'BookingController@index']);
Route::post('/book', ['as' => 'book.postbook', 'uses' => 'BookingController@postbook']);


Route::get('/contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
Route::post('/contact', ['as' => 'contact.postcontact', 'uses' => 'ContactController@postContact']);


Route::get('/donation', ['as' => 'donation.index', 'uses' => 'DonationController@index']);
Route::get('/donation/donate', ['as' => 'donation.donate', 'uses' => 'DonationController@donate']);
Route::post('/donation/donate', ['as' => 'donation.donate', 'uses' => 'DonationController@postdonate']);
Route::get('/donation/show/{id}', ['as' => 'donation.show', 'uses' => 'DonationController@show']);



Route::get('/gallery', ['as' => 'gallery.index', 'uses' => 'GalleryController@index']);

Route::get('/history', ['as' => 'history.index', 'uses' => 'HistoryController@index']);
//show post by id
Route::get('/history/{id}/show', ['as' => 'history.show', 'uses' => 'HistoryController@show']);

Route::get('/news', ['as' => 'news.index', 'uses' => 'NewsController@index']);
//show post added by ASO
Route::get('/news/{id}/show', ['as' => 'news.show', 'uses' => 'NewsController@show']);

Route::get('/staff/teacher', ['as' => 'staff.teacher', 'uses' => 'StaffController@index']);

Route::get('/staff/timetable', ['as' => 'staff.timetable', 'uses' => 'StaffController@timetable']);
