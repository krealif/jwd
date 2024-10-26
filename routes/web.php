<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

Route::controller(BeasiswaController::class)->group(function () {
    Route::get('/', 'index')->name('beasiswa.index');
    Route::get('/daftar', 'create')->name('beasiswa.create');
    Route::post('/daftar', 'store')->name('beasiswa.store');
    Route::get('/hasil', 'show')->name('beasiswa.show');
});
