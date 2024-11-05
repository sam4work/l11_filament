<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth:sanctum'])
    ->name('dashboard');

Route::get('/admin', function () {
    return view('admin.dashboard.index');
})->middleware(['auth:admin'])
    ->name('admin.dashboard');

