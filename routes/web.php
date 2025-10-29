<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/resume', [PortfolioController::class, 'resume']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::get('/projects', [PortfolioController::class, 'projects']);
