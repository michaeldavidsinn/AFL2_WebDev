<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AllDeskripsiController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\DetailProjectController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [CompanyProfileController::class, 'index']);

// Company Profile routes

Route::get('/company_profile_view', [CompanyProfileController::class, 'index']) ;

// About Us routes
Route::get('/about_us_view', [AboutUsController::class, 'index']);

// News routes
Route::get('/news_view', [NewsController::class, 'index']);

// Project routes
Route::get('/project_view', [ProjectController::class, 'index']);

// Detail Project routes
Route::get('/detail_project_view/{code}', [DetailProjectController::class, 'show']);

// Misi routes
Route::get('/misi_view', [MisiController::class, 'index']);

// Layananroutes
Route::get('/layanan_view', [LayananController::class, 'index']);

// All Deskripsi routes
Route::get('/all_deskripsi_view', [AllDeskripsiController::class, 'index']);
