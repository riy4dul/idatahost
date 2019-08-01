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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// =================Frontend=================
Route::group(['namespace' => 'frontend'], function() {

	Route::get('/', 'IDataHostController@index')->name('/');;
	Route::get('/dedicated-server', 'IDataHostController@dedicatedServer')->name('dedicatedServer');
	Route::get('/cloud-server', 'IDataHostController@CloudServer')->name('cloudServer');
	Route::get('/storage-server', 'IDataHostController@storageServer')->name('storageServer');

	Route::get('/unlimited-hosting', 'IDataHostController@unlimitedHosting')->name('unlimitedHosting');
	Route::get('/web-hosting', 'IDataHostController@webHosting')->name('webHosting');
	Route::get('/reseller-hosting', 'IDataHostController@resellerHosting')->name('resellerHosting');
	Route::get('/corporate-e-mail-hosting', 'IDataHostController@corporateEMailHosting')->name('corporateEMailHosting');
	Route::get('/wordpress-hosting', 'IDataHostController@wordpressHosting')->name('wordpressHosting');
	Route::get('/vps-hosting', 'IDataHostController@vpsHosting')->name('vpsHosting');

	Route::get('/domain', 'IDataHostController@domain')->name('domain');
	Route::get('/contact', 'IDataHostController@contact')->name('contact');

});

Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){

	Route::get('/home', 'HomeController@index')->name('home');
	
});