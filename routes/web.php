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
//Route Inicio
Route::get('/', function () {
    return view('welcome');
});

//Routes Auth
Auth::routes();

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
