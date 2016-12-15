<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/book', 'BookController');
Route::resource('/user', 'UserController');
Route::resource('/membership', 'MembershipController');
Route::resource('/loan', 'LoanController');
Route::resource('/author', 'AuthorController');
Route::resource('/genre', 'GenreController');
Route::resource('/post', 'PostController');
Route::get('/details/{id}', 'ShowPostController@show');