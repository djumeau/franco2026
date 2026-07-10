<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\PrayerTopicsController;

use App\Http\Controllers\LanguageSwitcherController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/documents', [DocumentController::class, 'index'])->name('documents');
Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::get('/prayertopics', [PrayerTopicsController::class, 'index'])->name('prayertopics');

Route::get('/lang/{locale}', [LanguageSwitcherController::class, 'switch'])->name('lang.switch');
