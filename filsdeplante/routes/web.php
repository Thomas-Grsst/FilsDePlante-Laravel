<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;
// use App\Livewire\PlantSearch;

Route::get('/', function () { return view('index');})->name('home');
Route::get('/vegetaux', function () { return view('vegetaux');});
Route::get('/potager', function () { return view('potager');});
// Route::get('/guides', function () { return view('guides');});
// Route::get('/contact', function () { return view('contact');});

