<?php

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

Route::get('/', function () {
    return view('welcome');
});


// Company Profile routes
Route::get('/company-profile', 'CompanyProfileController@index')->name('company-profile.index');
Route::get('/company-profile/edit/{companyProfile}', 'CompanyProfileController@edit')->name('company-profile.edit');
Route::put('/company-profile/update/{companyProfile}', 'CompanyProfileController@update')->name('company-profile.update');
Route::get('/company-profile/show/{companyProfile}', 'CompanyProfileController@show')->name('company-profile.show'); // Show a single company profile

// About Us routes
Route::get('/about-us', 'AboutUsController@index')->name('about-us.index');
Route::get('/about-us/edit/{aboutUs}', 'AboutUsController@edit')->name('about-us.edit');
Route::put('/about-us/update/{aboutUs}', 'AboutUsController@update')->name('about-us.update');
Route::get('/about-us/show/{aboutUs}', 'AboutUsController@show')->name('about-us.show'); // Show a single about us record

// News routes
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/edit/{news}', 'NewsController@edit')->name('news.edit');
Route::put('/news/update/{news}', 'NewsController@update')->name('news.update');
Route::get('/news/show/{news}', 'NewsController@show')->name('news.show'); // Show a single news item

// Project routes
Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::get('/projects/edit/{project}', 'ProjectController@edit')->name('projects.edit');
Route::put('/projects/update/{project}', 'ProjectController@update')->name('projects.update');
Route::get('/projects/show/{project}', 'ProjectController@show')->name('projects.show'); // Show a single project

