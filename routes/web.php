<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EducationHistoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'profile']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/project', [HomeController::class, 'project']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/education', [EducationHistoryController::class, 'index']);

Route::get('/education/create', [EducationHistoryController::class, 'create'])
    ->name('educations.create');