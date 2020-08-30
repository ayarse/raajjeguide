<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category/{category_id}', 'HomeController@index')->name('category');

Route::get('/search', 'HomeController@search')->name('search');

Route::get('/listing/{id}', function($id) {
    $listing = \App\Listing::findOrFail($id);
    return view('single-listing', compact('listing')); 
})->name('listing');

Route::middleware('auth')->group(function () {
    Route::get('/add', 'ListingController@add')->name('add');
    Route::post('/add', 'ListingController@store');
    Route::get('/edit/{id}', 'ListingController@edit')->name('edit');
    Route::post('/edit/{id}', 'ListingController@update');
    Route::get('/delete/{id}', 'ListingController@delete')->name('delete');
});

Auth::routes(['register' => false]);
//