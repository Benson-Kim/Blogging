<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Controller

// Eloquent

// Migrations =>


Route::get('/','PostsController@index')->name('home');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store')->name('login');
Route::get('/logout', 'SessionController@destroy');

Route::get('/forgot-password', 'ForgotPasswordController@create');
Route::post('/forgot-password', 'ForgotPasswordController@store');

Route::get('reset-password/{token}', 'ResetPasswordController@create');
Route::post('reset-password', 'ResetPasswordController@update');