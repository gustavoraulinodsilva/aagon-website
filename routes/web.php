<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDetailsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectsDetailsController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre-nos', [AboutController::class, 'index'])->name('about');
Route::get('/servicos', [ServicesController::class, 'index'])->name('services');
Route::get('/servicos/{slug}', [ServicesDetailsController::class, 'index'])->name('services.details');
Route::get('/projetos', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projetos/{slug}', [ProjectsDetailsController::class, 'index'])->name('projects.details');
Route::get('/equipe', [TeamController::class, 'index'])->name('team');
Route::get('/contato', [ContactController::class, 'index'])->name('contact');
