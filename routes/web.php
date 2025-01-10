<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);

Route::view('/{any?}', 'dashboard')
    ->where('any', '.*');
