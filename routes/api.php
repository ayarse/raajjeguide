<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('favorites', function() {

    $favorites = explode(",", request()->cookie('favorites'));
    $favs = \App\Listing::select('id', 'title', 'phone')->get()->filter(function ($item) use ($favorites) {
        return in_array($item->id, $favorites);
    })->values();
    return response()->json($favs);

})->name('favorites');