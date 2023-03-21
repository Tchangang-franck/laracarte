<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserConttroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth1\AuthenficationController;


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

Route::view('/','pages.home')->name('_home-path');
Route::view('/about', 'pages.about')->name('_about-path');
Route::get('/contact',[ContactController::class, 'create'])->name('contact-path');
Route::post('/contact',[ContactController::class, 'store'])->name('contact-path');


// Route::get('/register',[RegisteredUserConttroller::class, 'create'])->name('register');
// Route::post('/register',[RegisteredUserConttroller::class, 'store'])->name('register');
// Route::get('/login',[AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('/login',[AuthenticatedSessionController::class, 'store'])->name('login');
Route::view('/forgot-password1','Auth.forgot-password')->name('forgot-password');

Route::get('/register',[AuthenficationController::class, 'create'])->name('register');
Route::post('/register',[AuthenficationController::class, 'register'])->name('register');
Route::get('/login',[AuthenficationController::class, 'login'])->name('login');
Route::post('/login',[AuthenficationController::class, 'loginValidate'])->name('login');





