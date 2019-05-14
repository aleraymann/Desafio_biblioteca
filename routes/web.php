<?php

Route::get('/', function () {
  return view('auth.login');

});
Auth::routes();

//Books
Route::get('/books/new', 'BookController@new');
Route::post('/books/save/{id?}', 'BookController@store');
Route::get('/books/edit/{id}', 'BookController@edit');
Route::get('/books/delete/{id}', 'BookController@delete');

//Dashboard
Route::get('/dashboard', 'DashboardController@getBooks');

//RentalBooks
Route::get('/rentalbooks/new', 'RentalBookController@new');
Route::post('/rentalbooks/save/{id?}','RentalBookController@save');
Route::get('/rentalbooks/edit/{id}', 'RentalBookController@edit');
Route::get('/rentalbooks/delete/{id}', 'RentalBookController@delete');

//Users
Route::get('/users', 'UserController@index');
Route::get('/users/delete/{id}', 'UserController@delete');

