<?php

Route::get('/', 'HomeController@getHome');
////////////////////////////////////////
Route::get('login', function () {
    return view('auth.login');
});	
Route::group(['prefix' => 'catalog'], function() {
	/////////////////////////////////////////
	Route::get('index', 'CatalogController@getIndex');
	/////////////////////////////////////////
	Route::get('show', 'CatalogController@getShow');
	/////////////////////////////////////////
	Route::get('create', 'CatalogController@getCreate');
	/////////////////////////////////////////
	Route::get('edit', 'CatalogController@getEdit');
});
Route::get('master', function () {
    return view('master');
});
/////////////////////////////////////////
Route::get('logout', function () {
    return ('logout');
});