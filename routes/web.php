<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\LanguageSwitcherController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/lang/{locale}', [LanguageSwitcherController::class, 'switch'])->name('lang.switch');
