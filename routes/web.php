<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/category/{category_id}', 'HomeController@index')->name('category');
// Route::get('/page/{pageNo?}', 'HomeController@index')->name('paged');
Route::get('/search', 'HomeController@search')->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/add', 'ListingController@add')->name('add');
    Route::post('/add', 'ListingController@store');

    Route::get('/edit/{id}', 'ListingController@edit')->name('edit');
    Route::post('/edit/{id}', 'ListingController@update');

    Route::get('/delete/{id}', 'ListingController@delete')->name('delete');
});



Auth::routes(['register' => false]);

