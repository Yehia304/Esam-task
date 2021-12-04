<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/{id}','App\Http\Controllers\PostsController@show')->name('users.details');
});


