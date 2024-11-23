<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth:sanctum'])
    ->name('dashboard');

//Route::get('/admin', function () {
//    return view('admin.dashboard.index');
//})->middleware(['auth:admin'])
//    ->name('admin.dashboard');

