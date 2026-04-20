<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cloths', [ClothController::class, 'index'])->name('cloths.list');

Route::get('/cloths/{id}', [ClothController::class, 'show'])->name('cloths.detail');
