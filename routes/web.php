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
Route::fallback(function () {
    return view('pages.404');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('services', [\App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('services/{service}', [\App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('portfolios', [\App\Http\Controllers\HomeController::class, 'portfolios'])->name('portfolios');
Route::get('portfolios/{portfolio}', [\App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contact_us_post'])->name('contactPost');
Route::get('404', [\App\Http\Controllers\HomeController::class, 'PageNotFound'])->name('PageNotFound');

//admin
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'loginPost'])->name('loginPost');
Route::get('logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
Route::get('admin_dashboard', [\App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('change-password', [\App\Http\Controllers\AdminController::class, 'changePassword'])->name('changePassword');
Route::post('change-password', [\App\Http\Controllers\AdminController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::get('services_mgt', [\App\Http\Controllers\ServicesController::class, 'index'])->name('servicesMgt');
Route::post('services_mgt', [\App\Http\Controllers\ServicesController::class, 'store'])->name('servicesMgtCreate');
Route::patch('services_mgt/{service_id}', [\App\Http\Controllers\ServicesController::class, 'update'])->name('servicesMgtUpdate');
Route::delete('services_mgt/{service_id}', [\App\Http\Controllers\ServicesController::class, 'destroy'])->name('servicesMgtDelete');

Route::get('portfolio_mgt', [\App\Http\Controllers\PortfolioController::class, 'index'])->name('portfoliosMgt');
Route::post('portfolio_mgt', [\App\Http\Controllers\PortfolioController::class, 'store'])->name('portfoliosMgtCreate');
Route::patch('portfolio_mgt/{portfolio_id}', [\App\Http\Controllers\PortfolioController::class, 'update'])->name('portfoliosMgtUpdate');
Route::delete('portfolio_mgt/{portfolio_id}', [\App\Http\Controllers\PortfolioController::class, 'destroy'])->name('portfoliosMgtDelete');

Route::get('testimonies', [\App\Http\Controllers\TestimonyController::class, 'index'])->name('testimonies');
Route::post('testimonies', [\App\Http\Controllers\TestimonyController::class, 'store'])->name('testimoniesCreate');
Route::patch('testimonies/{testimony_id}', [\App\Http\Controllers\TestimonyController::class, 'update'])->name('testimoniesUpdate');
Route::delete('testimonies/{testimony_id}', [\App\Http\Controllers\TestimonyController::class, 'destroy'])->name('testimoniesDelete');

Route::get('feedback', [\App\Http\Controllers\AdminController::class, 'feedbacks'])->name('feedback');
