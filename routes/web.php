<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/questions', function () {
        return view('questions');
    })->name('questions');
    Route::get('/sql', function () {
        return view('sql');
    })->name('sql');
    Route::get('/api', function () {
        return view('api');
    })->name('api');
    Route::get('/mapa', function () {
        return view('mapa');
    })->name('mapa');
});
