<?php

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
    Route::get('/dashboard', [dashboradController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
