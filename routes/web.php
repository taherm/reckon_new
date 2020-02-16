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
})->name('home');


Route::get('/aboutus', function () {
    return view('frontend.about');
})->name('aboutus');


Route::get('/contactus', function () {
    return view('frontend.contactus');
})->name('contactus');

Route::get('/bookkeeping', function () {
    return view('frontend.services.bookkeeping');
})->name('services.bookkeeping');

Route::get('/financial_analysis', function () {
    return view('frontend.services.financial_analysis');
})->name('services.financial_analysis');

Route::get('/financial_planning', function () {
    return view('frontend.services.financial_planning');
})->name('services.financial_planning');

Route::get('/feasibility_study', function () {
    return view('frontend.services.feasibility_study');
})->name('services.feasibility_study');

Route::get('/cfo', function () {
    return view('frontend.services.cfo');
})->name('services.cfo');


Route::get('/home_ar', function () {
    return view('frontend_ar.index');
})->name('home_ar');

Route::get('language/{locale}', 'HomeController@changeLanguage')->name('language.change');