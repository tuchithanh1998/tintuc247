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
Route::get('admin/login.html','UserController@getlogin')->name('login');
Route::post('admin/login.html','UserController@postlogin');
Route::get('admin/logout.html','UserController@getlogout');




Route::get('/', function () {
    return view('welcome');
});
Route::fallback(function () {
    return redirect('/');
});