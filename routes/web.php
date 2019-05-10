<?php

Route::get('/', function () {
    return view('auth.login');

});
Auth::routes();

Route::get('/books/new', 'BookController@new');
Route::post('/books/save/{id?}', 'BookController@store');
Route::get('/books/edit/{id}', 'BookController@edit');
Route::get('/books/delete/{id}', 'BookController@delete');

Route::get('/dashboard', 'DashboardController@getBooks');

Route::get('/rentalbooks/new', 'RentalBookController@new');
Route::post('/rentalbooks/save/{id?}','RentalBookController@save');
Route::get('/rentalbooks/edit/{id}', 'RentalBookController@edit');
Route::get('/rentalbooks/delete/{id}', 'RentalBookController@delete');

Route::get('/users', 'UserController@index');



Route::get('/home', 'HomeController@index')->name('home');
