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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post','PostController@index');
Route::post('post', 'PostController@save')->name('postsave');
Route::get('delete/{id}', 'PostController@delete')->name('postdelete');
Route::get('edit/{id}', 'PostController@edit')->name('postedit');
Route::post('put', 'PostController@put')->name('postput');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
