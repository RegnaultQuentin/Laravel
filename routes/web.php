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

Route::get('admin', function () {
    return view('admin');
});

Route::get('alo', function () {
    return view('alo');
});

Route::get('toto', function () {
    return view('toto');
});

## Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/autre', function () {
    return view('autre');
})->name('autre');