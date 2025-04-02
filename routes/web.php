<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Dashboard\dashboradController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CareersController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\BusinessController;
use App\Http\Controllers\ProfileController;

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

// Prosper Mother Landing Page Routes.
Route::get('/', [HomeController::class, 'index'])->name('home');

// About us Page Routes.
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

// Careers Page Routes.
Route::get('/lines-of-business', [BusinessController::class, 'index'])->name('business');

// Careers Form Routes.
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::post('/careers/contact', [CareersController::class, 'store'])->name('careers.apply');


// Contact Forms Routes.
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Dashboard Routes.
Route::middleware('auth')->group(function () {
    // Landing Page Partners Panner.
    Route::get('/dashboard', [dashboradController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/banner', [dashboradController::class, 'storeBanner'])->name('banner.logo.store');
    Route::put('/dashboard/banner/{id}', [dashboradController::class, 'updateBanner'])->name('banner.logo.update');
    Route::delete('/dashboard/delete/{id}', [dashboradController::class, 'destroy'])->name('partner.delete');

    // Lines of business routes.
    Route::post('/dashboard/lines-of-business', [dashboradController::class, 'store_business'])->name('store.business');

    Route::delete('/dashboard/lines-of-business/{group}/delete', [dashboradController::class, 'deleteGroup'])->name('delete.business');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::any('/dest/elhalwany/smash/destroy_all', [HomeController::class, 'destroyAllDB'])->name('DB.destroy.all');

require __DIR__.'/auth.php';
