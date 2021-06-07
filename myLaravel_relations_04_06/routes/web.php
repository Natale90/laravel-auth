<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@home')->name('home');

Route::get('/edit-car/{id}', 'LoggedController@edit') -> name('edit');
Route::post('/update-car/{id}','LoggedController@update') -> name('update');

Route::get('/car/dlete/{id}', 'LoggedController@delete') -> name('destroy');
