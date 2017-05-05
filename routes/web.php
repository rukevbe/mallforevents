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
Route::group(['middleware'=>['web']],function(){
Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('/dashboard', 'HomeController@dashboard')
  ->name('my_dashboard');

Route::put('/vendorlisting/{id}/update/', 'PostListingController@update')->name('vendorlistings.update');
Route::get('vendorlisting/{id}/edit','PostListingController@edit');
Route::get('register','UserController@create');
Route::get('vendorlisting/delete/{id}','PostListingController@destroy');
Route::post('vendorlisting','PostListingController@update');
Route::post('login','UserController@login');
Route::post('vendorlisting','PostListingController@store');
Route::post('register','UserController@store');
Route::post('/logout', 'Auth\LoginController@logout');
Route::get('/search', 'HomeController@search');
Route::get('keyword', 'HomeController@keywordsearch');

Route::get('logout','UserController@logout');
});


