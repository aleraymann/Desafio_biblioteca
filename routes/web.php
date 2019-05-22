<?php

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
//Dashboard
Route::get('/dashboard', 'DashboardController@getBooks')->name('dashboard');

//Books
Route::group(["prefix" => "books"], function () {
    Route::get('new', 'BookController@index')->name('newBook');
    Route::post('save/{id?}', 'BookController@store')->name('storeBook');
    Route::get('edit/{id}', 'BookController@edit')->name('editBook');
    Route::post('{id}', 'BookController@update')->name('updateBook');

    Route::get('delete/{id}', 'BookController@destroy')->name('deleteBook');
});

//RentalBooks
Route::group(["prefix" => "rentalbooks"], function () {
    Route::get('new', 'RentalBookController@index')->name('newRental');
    Route::post('save/{id?}', 'RentalBookController@store')->name('storeRental');
    Route::get('delete/{id}', 'RentalBookController@destroy')->name('deleteRental');
});

//Users
Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/delete/{id}', 'UserController@destroy')->name('deleteUsers');
