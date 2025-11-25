<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotagerController;
use App\Http\Controllers\VegetauxController;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\ContactController;

Route::get('/', function () { return view('index');})->name('home');
Route::get('/vegetaux', [VegetauxController::class, 'index'])->name('vegetaux');
Route::get('/potager', [PotagerController::class, 'index'])->name('potager');
Route::get('/guides', [GuidesController::class,'index'])->name('guides');
Route::get('/contact', [ContactController::class,'index'])->name('contact');