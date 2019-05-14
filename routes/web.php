<?php

Route::get('/', function () {
  return view('auth.login');

});
Auth::routes();
//Dashboard
Route::get('/dashboard', 'DashboardController@getBooks');

//Books
Route::group(["prefix" => "books"], function(){
    Route::get('new', 'BookController@new');
    Route::post('save/{id?}', 'BookController@store');
    Route::get('edit/{id}', 'BookController@edit');
    Route::get('delete/{id}', 'BookController@delete');
}); 

//RentalBooks
Route::group(["prefix" => "rentalbooks"], function(){
    Route::get('new', 'RentalBookController@new');
    Route::post('save/{id?}','RentalBookController@save');
    Route::get('edit/{id}', 'RentalBookController@edit');
    Route::get('delete/{id}', 'RentalBookController@delete')->middleware("auth");
}); 

//Users
Route::get('/users', 'UserController@index');
Route::get('/users/delete/{id}', 'UserController@delete');
