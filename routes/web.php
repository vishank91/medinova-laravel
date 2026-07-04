<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [FrontController::class, "homePage"])->name('home');
Route::get('/about', [FrontController::class, "aboutPage"])->name('about');
Route::get('/service', [FrontController::class, "servicePage"])->name('service');
Route::get('/pricing', [FrontController::class, "pricingPage"])->name('pricing');
Route::get('/team', [FrontController::class, "teamPage"])->name('team');
Route::get('/testimonial', [FrontController::class, "testimonialPage"])->name('testimonial');
Route::get('/appointment', [FrontController::class, "appointmentPage"])->name('appointment');
Route::get('/search', [FrontController::class, "searchPage"])->name('search');
Route::get('/contact', [FrontController::class, "contactPage"])->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
