<?php

use Illuminate\Support\Facades\Route;

//index
Route::get('/', 'DrinkController@index') -> name('drinks-index');

//show
Route::get('/drink/{id}', 'DrinkController@show') -> name('drink-show');

//create
Route::get('/new/drink', 'DrinkController@create') 
    -> name('drink-create');
Route::post('/new/drink/store', 'DrinkController@store') 
    -> name('drink-store');

//edit
Route::get('/edit/drink/{id}', 'DrinkController@edit') 
    -> name('drink-edit');
Route::post('/update/drink/{id}', 'DrinkController@update') 
    -> name('drink-update');

//delete
Route::get('/delete/drink/{id}', 'DrinkController@delete') 
    -> name('drink-delete');


