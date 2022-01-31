<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MailController;

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

// Main Navigation

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('portfolio', function () {
    return view('portfolio');
});



Route::get('contact', function () {
    return view('contact');
});

// Offers routes

Route::get('offers', function () {
    return view('offers.offers');
});

Route::get('marketing-strategy', function () {
    return view('offers.marketing');
});

Route::get('study', function () {
    return view('offers.study');
});

Route::get('sales-representation', function () {
    return view('offers.sales-rep');
});

Route::get('performance-tracking', function () {
    return view('offers.performance-tracking');
});

/**
 * Courses routes
 */

Route::get('courses', [CoursesController::class, 'index']);
Route::post('verify', [CoursesController::class, 'verify']);
Route::get('courses-details', [CoursesController::class, 'course_details']);

/**
 * Mail Routes
 */

 Route::get('send-email', [MailController::class, 'index']);