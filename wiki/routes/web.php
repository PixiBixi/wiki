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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/non', 'HomeController@non');
Route::get('/articles', 'ArticlesController@show');
Route::post('/articles', 'ArticlesController@post');
Route::get('/articles/all', 'ArticlesController@showAll');
