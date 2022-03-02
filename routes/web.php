<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminEventsController;
use App\Http\Controllers\Admin\AdminFacilitatorsController;
use App\Http\Controllers\Admin\AdminForumController;
use App\Http\Controllers\Admin\AdminPodcastsController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminSubscribesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PodcastsController;
use App\Http\Controllers\ProjectController;

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



Route::get('message', function () {
    return view('messages');
})->name('messages');

/**
 * Portfolio
 */

Route::get('portfolio/{token}', [ProjectController::class, 'project_details'])->name('project_details');
Route::get('portfolio', [ProjectController::class, 'index'])->name('portfolio');

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
 * Events Routes
 */

Route::get('events/details/{token}', [EventsController::class, 'event_details'])->name('event_details');
Route::get('events', [EventsController::class, 'index'])->name('events');

/**
 * ACTIVITY
 */

Route::post('activity/subscribe', [ActivityController::class, 'subscribe'])->name('activity_subscribe');
Route::post('verify', [ActivityController::class, 'verify'])->name('verify_subscription');

/**
 * Courses routes
 */

Route::get('courses/details/{token}', [CoursesController::class, 'course_details'])->name('course_details');
Route::get('courses', [CoursesController::class, 'index'])->name('courses');

/**
 * Podcasts
 */

Route::get('podcasts', [PodcastsController::class, 'index'])->name('podcasts');
Route::get('podcasts/details/{token}', [PodcastsController::class, 'podcast_details'])->name('podcast_details');

/**
 * Mail Routes
 */

 Route::get('send-email/{recipient}', [MailController::class, 'index']);

 /**
  * Admin Routes
  */

  Route::get('dashboard/subscribes/ticket-verifier', [AdminSubscribesController::class, 'ticket_verifier'])->name('ticket_verifier');
  Route::post('dashboard/subscribes/ticket-verifier', [AdminSubscribesController::class, 'verify'])->name('verify_ticket');
  Route::post('dashboard/subscribes/update-state', [AdminSubscribesController::class, 'update_state'])->name('update_state');
  Route::get('dashboard/subscribes', [AdminSubscribesController::class, 'index'])->name('subscribes');
  
  Route::post('dashboard/add-course', [AdminCourseController::class, 'register_course'])->name('add_course');
  Route::get('dashboard/courses', [AdminCourseController::class, 'index'])->name('all_courses');
  
  Route::get('dashboard/facilitators', [AdminFacilitatorsController::class, 'index'])->name('facilitators');
  Route::post('dashboard/facilitators/new', [AdminFacilitatorsController::class, 'add_facilitator'])->name('add_facilitator');
  
  Route::get('dashboard/forums', [AdminForumController::class, 'index'])->name('all_forums');
  Route::get('dashboard/forums/details/{token}', [AdminForumController::class, 'details'])->name('forum_details');
  Route::post('dashboard/forums/new/add-session', [AdminForumController::class, 'post_forum_session'])->name('add_forum_session');
  Route::post('dashboard/forums/new/add-ticket', [AdminForumController::class, 'post_forum_ticket'])->name('add_ticket');
  Route::post('dashboard/forums/new/add-sponsor', [AdminForumController::class, 'post_forum_sponsor'])->name('add_forum_sponsor'); 
  Route::get('dashboard/forums/new/step-one', [AdminForumController::class, 'schedule_forum_step_one'])->name('add_forum');
  Route::post('dashboard/forums/new/step-one', [AdminForumController::class, 'post_forum_step_one'])->name('add_forum');
  Route::get('dashboard/forums/new/step-two/{token}', [AdminForumController::class, 'schedule_forum_step_two'])->name('add_forum_step_two');
  Route::post('dashboard/forums/new/step-two/add', [AdminForumController::class, 'post_forum_step_two'])->name('post_forum_step_two');
  Route::get('dashboard/forums/new/step-three/{token}', [AdminForumController::class, 'schedule_forum_step_three'])->name('add_forum_step_three');
  Route::post('dashboard/forums/new/step-three/add', [AdminForumController::class, 'post_forum_step_three'])->name('post_forum_step_three');
  Route::get('dashboard/forums/new/step-four/{token}', [AdminForumController::class, 'schedule_forum_step_four'])->name('add_forum_step_four');
  Route::post('dashboard/forums/new/step-four/add', [AdminForumController::class, 'post_forum_step_four'])->name('post_forum_step_four');
  

  Route::get('dashboard/events', [AdminEventsController::class, 'index'])->name('all_events');
  Route::post('dashboard/events', [AdminEventsController::class, 'add_event'])->name('add_event');

  Route::get('dashboard/podcasts', [AdminPodcastsController::class, 'index'])->name('all_podcasts');
  Route::post('dashboard/podcasts', [AdminPodcastsController::class, 'add'])->name('add_podcast');
  
  Route::get('projects', [AdminProjectController::class, 'index'])->name('all_projects');
  Route::post('projects/new', [AdminProjectController::class, 'add'])->name('add_project');

  Route::get('dashboard/auth/login', [AdminAuthController::class, 'login'])->name('admin_login');
  Route::post('dashboard/auth/login', [AdminAuthController::class, 'sign_in'])->name('admin_login');
  Route::get('dashboard/auth/logout', [AdminAuthController::class, 'logout'])->name('logout');
  Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
