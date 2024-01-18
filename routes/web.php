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

Route::view('/', 'welcome');

Auth::routes();

Route::view('/home', 'home')->middleware('auth');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::view('/admin', 'admin')->middleware('auth:admin');

Route::get('/login/client', 'Auth\LoginController@showClientLoginForm');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');
Route::post('/login/client', 'Auth\LoginController@clientLogin');
Route::post('/register/client', 'Auth\RegisterController@createClient');
Route::view('/client', 'client')->middleware('auth:client');