<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\admin\AdminAuthController;

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
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

// Offers routes

Route::get('offers/marketing-strategy', function () {
    return view('offers.marketing');
})->name('marketing_strategy');

Route::get('offers/performance-tracking', function () {
    return view('offers.performance-tracking');
})->name('performance_tracking');

Route::get('offers/sales-representation', function () {
    return view('offers.sales-rep');
})->name('sales_representation');

Route::get('offers/study', function () {
    return view('offers.study');
})->name('study');

Route::get('offers', function () {
    return view('offers.offers');
})->name('offers');

/**
 * Courses routes
 */

Route::get('courses/details', [CoursesController::class, 'course_details'])->name('course_details');
Route::get('courses', [CoursesController::class, 'index'])->name('courses');
Route::post('verify', [CoursesController::class, 'verify'])->name('verify_subscription');

/**
 * Mail Routes
 */

 Route::get('send-email', [MailController::class, 'index']);

 /**
  * Admin Routes
  */

  Route::get('dashboard/add-course', [AdminCourseController::class, 'add_course'])->name('add_course');
  Route::get('dashboard/all-courses', [AdminCourseController::class, 'index'])->name('all_courses');
  Route::get('dashboard/auth/login', [AdminAuthController::class, 'login'])->name('admin_login');
  Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
