<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CareersController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\BusinessController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/lines-of-business', [BusinessController::class, 'index'])->name('business');

// Careers Form Routes.
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::post('/careers/contact', [CareersController::class, 'store'])->name('careers.apply');


// Contact Forms Routes.
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
