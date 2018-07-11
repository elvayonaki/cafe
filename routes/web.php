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

Route::group(['prefix'=>'user'],function(){
    Route::get('/store/create', 'StoreController@create')->name('store.create');
    Route::post('/store/store', 'StoreController@store')->name('store.store');
});

Route::group(['prefix'=>'admin'],function(){
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
        Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
        Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
});
