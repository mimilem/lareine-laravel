<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminFacilitatorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('message', function () {
    return view('messages');
})->name('messages');

/**
 * Contact 
 */

Route::get('contact', [MessageController::class, 'index'])->name('contact');
Route::post('contact', [MessageController::class, 'send'])->name('contact');


// Offers routes


/*****************************************
 * Missions Routes
 */

Route::get('offers/study/surveys', function () {
    return view('offers.missions.surveys');
})->name('surveys'); 

Route::get('offers/marketing-strategy/branding', function () {
    return view('offers.missions.branding');
})->name('branding');

Route::get('offers/marketing-strategy/digital-marketing', function () {
    return view('offers.missions.digital-marketing');
})->name('digital_marketing');

Route::get('offers/marketing-strategy/customer', function () {
    return view('offers.missions.customer');
})->name('customer_experience');

Route::get('offers/marketing-strategy/product-management', function () {
    return view('offers.missions.product-management');
})->name('product_management');

// Study Missions

Route::get('offers/study/qualitative-studies', function () {
    return view('offers.missions.qualitatives-studies');
})->name('qualitative_studies');

Route::get('offers/study/quantitative-studies', function () {
    return view('offers.missions.quantitatives-studies');
})->name('quantitative_studies');

Route::get('offers/study/trade-census', function () {
    return view('offers.missions.trade-census');
})->name('trade_census');

// Sales rep Missions

Route::get('offers/sales-representation/administrative-canvass', function () {
    return view('offers.missions.administrative-canvass');
})->name('administrative_canvass');

Route::get('offers/sales-representation/prospection', function () {
    return view('offers.missions.prospection');
})->name('prospection');

// Performance Tracking

Route::get('offers/performance-tracking/kpi-definition', function () {
    return view('offers.missions.kpi-definition');
})->name('kpi_definition');

Route::get('offers/performance-tracking/tracking-system', function () {
    return view('offers.missions.tracking-system');
})->name('tracking_system');

Route::get('offers/performance-tracking/data-analysis', function () {
    return view('offers.missions.data-analysis');
})->name('data_analysis');



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

Route::get('courses/details/{token}', [CoursesController::class, 'course_details'])->name('course_details');
Route::post('courses/subscribe', [CoursesController::class, 'subscribe'])->name('course_subscribe');
Route::get('courses', [CoursesController::class, 'index'])->name('courses');
Route::post('verify', [CoursesController::class, 'verify'])->name('verify_subscription');

/**
 * Mail Routes
 */

 Route::get('send-email/{recipient}', [MailController::class, 'index']);

 /**
  * Admin Routes
  */

  // Courses

  Route::post('dashboard/add-course', [AdminCourseController::class, 'register_course'])->name('add_course');
  Route::get('dashboard/courses', [AdminCourseController::class, 'index'])->name('all_courses');
  Route::get('dashboard/facilitators', [AdminFacilitatorsController::class, 'index'])->name('facilitators');
  Route::post('dashboard/facilitators/new', [AdminFacilitatorsController::class, 'add_facilitator'])->name('add_facilitator');
  Route::get('dashboard/auth/login', [AdminAuthController::class, 'login'])->name('admin_login');
  Route::post('dashboard/auth/login', [AdminAuthController::class, 'sign_in'])->name('admin_login');
  Route::get('dashboard/auth/logout', [AdminAuthController::class, 'logout'])->name('logout');
  Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
