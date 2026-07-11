<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminServiceController;
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

Route::prefix("admin")->group(function () {
    Route::get('/', [AdminHomeController::class, "homePage"])->name('admin-home');

    Route::prefix("service")->group(function () {
        Route::get('/', [AdminServiceController::class, "index"])->name('admin-service');
        Route::get('/create', [AdminServiceController::class, "create"])->name('admin-service-create');
        Route::post('/store', [AdminServiceController::class, "store"])->name('admin-service-store');
        Route::get('/destroy/{id}', [AdminServiceController::class, "destroy"])->name('admin-service-destroy');
        Route::get('/edit/{id}', [AdminServiceController::class, "edit"])->name('admin-service-edit');
        Route::post('/update/{id}', [AdminServiceController::class, "update"])->name('admin-service-update');
        Route::get('/show/{id}', [AdminServiceController::class, "show"])->name('admin-service-show');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});



require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
