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
Route::group(['prefix' => '/','Category'], function () {
    Route::get('category/list','CategoryController@index')->name('Category.index');
    Route::get('category/create', 'CategoryController@create')->name('Category.create');
    Route::post('category/store', 'CategoryController@store')->name('Category.store');
    Route::get('category/detail/{id}', 'ContentController@show')->name('Category.show');
    Route::get('category/edit/{id}', 'CategoryController@edit')->name('Category.edit');
    Route::post('category/edit/{id}', 'CategoryController@update')->name('Category.edit');
    Route::get('category/delete/{id}', 'CategoryController@delete')->name('category.delete');
});

