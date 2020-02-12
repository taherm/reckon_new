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
    return view('frontend.index');
});


Route::get('/aboutus', function () {
    return view('frontend.about');
});


Route::get('/contactus', function () {
    return view('frontend.contactus');
});

Route::get('/service1', function () {
    return view('frontend.services.service1');
});