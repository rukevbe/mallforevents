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

Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('/dashboard', 'HomeController@dashboard')
  ->name('my_dashboard');

Route::get('register','UserController@create');

Route::post('login','UserController@login');
Route::post('vendorlisting','PostListingController@store');
Route::post('register','UserController@store');
Route::post('/logout', 'Auth\LoginController@logout');

Route::get('logout','UserController@logout');


