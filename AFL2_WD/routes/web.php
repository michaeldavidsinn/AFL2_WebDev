<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CompanyProfileController::class, 'index']);

// Company Profile routes


Route::get('/company_profile_view', [CompanyProfileController::class, 'index'],);

// About Us routes

Route::get('/about_us_view', [AboutUsController::class, 'index']);


// News routes
Route::get('/news_view', [NewsController::class, 'index']);

// Project routes
Route::get('/project_view', [ProjectController::class, 'index']);

