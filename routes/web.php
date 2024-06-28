<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloopController;


// Set the root route to the index method of BloopController
Route::get('/', [BloopController::class, 'index']);

// Define resource routes for bloops
Route::resource('bloops', BloopController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('/simulate-404', function () {
    abort(404);
})->name('simulate-404');
Route::get('/simulate-419', function () {
    abort(419);
})->name('simulate-419');

Route::get('/simulate-500', function () {
    abort(500);
})->name('simulate-500');



require __DIR__.'/auth.php';
