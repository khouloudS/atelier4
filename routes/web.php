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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function (){
    Route::prefix('categories')->group(function (){
        Route::get('/', 'CategoryController@index')->name('category.index');
        Route::get('/create', 'CategoryController@create')->name('category.create');
        Route::post('/store', 'CategoryController@store')->name('category.store');
        Route::get('/{id}/show', 'CategoryController@show')->name('category.show');
        Route::get('/{id}/edit', 'CategoryController@edit')->name('category.edit');
        Route::post('/{id}/update', 'CategoryController@update')->name('category.update');
        Route::get('/{id}/delete', 'CategoryController@delete')->name('category.delete');
    });
    Route::prefix('products')->group(function (){

        Route::get('/', 'ProductController@index')->name('product.index');
        Route::get('/create', 'ProductController@create')->name('product.create');
        Route::post('/store', 'ProductController@store')->name('product.store');
        Route::get('/{id}/show', 'ProductController@show')->name('product.show');

    });
});
