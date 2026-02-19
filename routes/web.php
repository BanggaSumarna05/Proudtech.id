<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// ─── Public Routes ───────────────────────────────────────────────────────────
Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/services', [ServiceController::class , 'index'])->name('services.index');
Route::get('/services/{service:slug}', [ServiceController::class , 'show'])->name('services.show');
Route::get('/portfolio', [ProjectController::class , 'index'])->name('portfolio.index');
Route::get('/portfolio/{project:slug}', [ProjectController::class , 'show'])->name('portfolio.show');
Route::get('/about', [AboutController::class , 'index'])->name('about');
Route::get('/contact', [ContactController::class , 'index'])->name('contact');

// ─── Auth Routes (login only – no register) ───────────────────────────────────
Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class , 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class , 'store'])
    ->middleware('guest');

Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class , 'destroy'])
    ->middleware('auth')
    ->name('logout');

// ─── Admin Routes ─────────────────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [DashboardController::class , 'index'])->name('dashboard');

    Route::resource('services', AdminServiceController::class);
    Route::resource('projects', AdminProjectController::class);
    Route::delete('projects/{project}/images/{image}', [AdminProjectController::class , 'destroyImage'])->name('projects.images.destroy');
    Route::resource('testimonials', AdminTestimonialController::class);
    Route::get('settings', [SettingController::class , 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class , 'update'])->name('settings.update');
});
