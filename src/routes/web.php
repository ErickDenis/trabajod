<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostulantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false, // Registration Routes...
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register/company', [CompanyController::class, 'showRegistrationForm'])->name('register.company');
Route::post('/register/company', [CompanyController::class, 'register'])->name('register.company.submit');

Route::get('/register/postulant', [PostulantController::class, 'showRegistrationForm'])->name('register.postulant');
Route::post('/register/postulant', [PostulantController::class, 'register'])->name('register.postulant.submit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
