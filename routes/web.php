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

Route::get('/klacht', function () {
    return view('klacht');
});

Route::get('/overzicht', function () {
    return view('overzicht');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/faq', function () {
    return view('faq');
});

/*Route::get('/contact', function () {
    return view('contact');
});*/

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

// Route::post('contact', 'ContactController@showForm')name('contact.show');
