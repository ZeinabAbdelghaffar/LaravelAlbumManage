<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Registration routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Email verification routes
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// Album routes
Route::resource('albums', AlbumController::class)->middleware('auth');
Route::post('albums/{album}/upload-pictures', [AlbumController::class, 'uploadPictures'])->name('albums.uploadPictures');
Route::delete('albums/{album}/remove-image/{image}', [AlbumController::class, 'removeImage'])->name('albums.removeImage');
Route::post('albums/{album}/handle-pictures', [AlbumController::class, 'handlePictures'])->name('albums.handlePictures');

// Default route
Route::get('/', function () {
    return view('welcome');
});
