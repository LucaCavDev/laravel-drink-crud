<?php

use Illuminate\Support\Facades\Route;

//index
Route::get('/', 'DrinkController@index') -> name('drinks-index');

//show
Route::get('/drink/{id}', 'DrinkController@show') -> name('drink-show');

//create
Route::get('/new/drink', 'DrinkController@create') -> name('drink-create');
Route::post('/new/drink/store', 'DrinkController@store') -> name('drink-store');

