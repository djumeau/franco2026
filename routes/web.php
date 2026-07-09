<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;

use App\Http\Controllers\LanguageSwitcherController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/program', [ProgramController::class, 'index'])->name('program');

Route::get('/lang/{locale}', [LanguageSwitcherController::class, 'switch'])->name('lang.switch');
