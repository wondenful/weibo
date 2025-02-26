<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::resource('users', UsersController::class);

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
//Route::resource('users', 'UsersController');
