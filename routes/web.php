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
    return view('toto');
});
Route::get('presentation', function () {
    return view('presentation');
});

## Route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/autre', function () {
    return view('autre');
})->name('autre');