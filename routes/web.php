<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassController;

Route::get('/classes', [SchoolClassController::class, 'index']);
Route::get('/classes/create', [SchoolClassController::class, 'create'])->name('classes.create');
Route::post('/classes', [SchoolClassController::class, 'store'])->name('classes.store');