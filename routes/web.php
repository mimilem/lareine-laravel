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

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('offers', function () {
    return view('offers.offers');
});

Route::get('marketing-strategy', function () {
    return view('offers.marketing');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('courses', function () {
    return view('courses.courses');
});