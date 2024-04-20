<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', 'App\Http\Controllers\Test@test');
Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/main', 'MainController@main')->name('main');
    Route::get('/categories', 'CategoryController@categories')->name('categories');
    Route::get('/basket', 'BasketController@basket')->name('basket');
    Route::get('/basket/order', 'BasketController@order')->name('order');
    Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basketAdd');
    Route::post('/basket/remove/{id}', 'BasketController@basketRemove')->name('basketRemove');
    Route::post('/basket/order', 'BasketController@confirm')->name('basketConfirm');
    Route::get('/{category}', 'CategoryController@category')->name('category');
    Route::get('/{category}/{product?}', 'ProductController@product')->name('product');
    Route::get('/about', 'AboutController@about')->name('about');
});
