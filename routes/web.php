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


Route::get('/gallery', ['as' => 'gallery.index', 'uses' => 'GalleryController@index']);

Route::get('/history', ['as' => 'history.index', 'uses' => 'HistoryController@index']);

Route::get('/news', ['as' => 'news.index', 'uses' => 'NewsController@index']);

Route::get('/staff/teacher', ['as' => 'staff.teacher', 'uses' => 'StaffController@index']);

Route::get('/staff/timetable', ['as' => 'staff.timetable', 'uses' => 'StaffController@timetable']);
