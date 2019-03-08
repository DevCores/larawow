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
    return view('app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/news', 'HomeController@all');
Route::delete('/home/news/{id}/delete', 'HomeController@deleteNews');
Route::post('/home/news/{id}/edit', 'HomeController@editNews');
Route::post('/home/index/{id}/edit', 'HomeController@editNewsIndex');
Route::post('/home/news/add', 'HomeController@addNews');
Route::get('/', 'NewsController@index');
Route::get('/news/', 'NewsController@all');
Route::get('/news/{id}', 'NewsController@show');


