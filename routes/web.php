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

## URL
Route::get('/', function () {
    return view('welcome');
});
Route::get('presentation', function () {
    return view('presentation');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdministratorController@index')->middleware("auth", "role:Administrateur");
Route::get('/moderator', 'ModeratorController@index')->middleware("auth", "role:Modérateur");
Route::get('/user', 'UserController@index')->middleware("auth", "role:Utilisateur");

## Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/autre', function () {
    return view('autre');
})->name('autre');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
