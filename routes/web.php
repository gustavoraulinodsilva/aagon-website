<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre-nos', [AboutController::class, 'index'])->name('about');
Route::get('/servicos', [ServicesController::class, 'index'])->name('services');
