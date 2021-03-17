<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/page', 'as' => 'page.'], function(){
    Route::get('/index', 'PageController@index')->name('index');
    Route::get('/show/{id}', 'PageController@show')->name('show');
});

Route::group(['prefix' => '/post', 'as' => 'post.'], function(){
    Route::get('/index', 'PostController@index')->name('index');
    Route::get('/show/{id}', 'PostController@show')->name('show');
});
