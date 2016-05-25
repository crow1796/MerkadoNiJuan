<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', 'HomeController@index');
Route::get('/', 'PagesController@index');

Route::group(['namespace' => 'Auth'], function(){
	Route::get('/login', 'AuthController@showLoginForm');
	Route::post('/login', 'AuthController@login');
	Route::get('/register', 'AuthController@showRegistrationForm');
	Route::post('/register', 'AuthController@register');
	Route::get('/logout', 'AuthController@logout');
});

Route::group(['prefix' => 'shops'], function(){
	Route::get('/', 'ShopController@index');
	Route::get('/{shop}', 'ShopController@show');
	Route::get('/{shop}/items', 'ShopController@show');
	
	Route::get('/{shop}/items/{item}', 'ItemsController@show');

	Route::get('/{shop}/about-us', 'ShopController@about');
	Route::get('/{shop}/reviews', 'ShopController@reviews');
	Route::get('/{shop}/settings', 'ShopController@settings');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	Route::group(['namespace' => 'Auth'], function(){
		Route::get('/', 'AuthController@showLoginForm');
		Route::post('/', 'AuthController@login');
		Route::get('/logout', 'AuthController@logout');
	});

	Route::get('/dashboard', 'DashboardController@index');
});