<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/planes', [PlanController::class, 'index'])->name('planes.index');
