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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blog', 'ArticlesController')->middleware('auth');

Route::get('/', 'BlogController@front');

Route::get('/articles', 'BlogController@articles')->name('articles');

Route::get('/{article}', 'BlogController@article')->name('post');