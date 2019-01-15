<?php

Route::get('/', function () {
    return view('home');
});
////////////////////////////////////////
Route::get('login', function () {
    return view('auth.login');
});
/////////////////////////////////////////
Route::get('index', function () {
    return view('catalog.index');
});
/////////////////////////////////////////
Route::get('show/{id}', function () {
    return view('catalog.show', array('id'=>$id));
});
/////////////////////////////////////////
Route::get('create', function () {
    return view('catalog.create');
});
/////////////////////////////////////////
Route::get('edit/{id}', function () {
    return view('catalog.edit', array('id'=>$id));
});
/////////////////////////////////////////
Route::get('master', function () {
    return view('master');
});
/////////////////////////////////////////
Route::get('logout', function () {
    return ('logout');
});