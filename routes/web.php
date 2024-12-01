<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrecognitionController;
use App\Http\Controllers\SkillsController;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/skills', SkillsController::class);

// Precognition
Route::controller(PrecognitionController::class)
    ->prefix('precognition')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'post')->middleware([HandlePrecognitiveRequests::class]);
    });
