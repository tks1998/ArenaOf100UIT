<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('questions', 'question_controller');
<<<<<<< HEAD
Route::resource('users', 'user_controller');
=======

Route::get('questions/show/{id}', 'question_controller@show');

>>>>>>> 1075b2535649fc9e26666440a7eac1e976a5d0b0
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

