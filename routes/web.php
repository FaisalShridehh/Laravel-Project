<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index')->name('jobs.index');
    Route::get('/jobs/create', 'create')->name('jobs.create')->middleware('auth');
    Route::post('/jobs', 'store')->name('jobs.store')->middleware('auth');
    // Route::get('/jobs/{job}', 'show')->name('jobs.show');
    // Route::get('/jobs/{job}/edit', 'edit')->name('jobs.edit')->middleware('auth');
    // Route::put('/jobs/{job}', 'update')->name('jobs.update')->middleware('auth');
    // Route::delete('/jobs/{job}', 'destroy')->name('jobs.destroy')->middleware('auth');
});

Route::get('/search', SearchController::class)->name('jobs.search');
Route::get('/tags/{tag:name}', TagController::class)->name('tags.search');




Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create')->name('auth.create.register')->middleware('guest');
    Route::post('/register', 'store')->name('auth.store.register')->middleware('guest');
});


Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->name('auth.create.login')->middleware('guest');
    Route::post('/login', 'store')->name('auth.store.login')->middleware('guest');
    Route::delete('/logout', 'destroy')->name('auth.destroy.logout')->middleware('auth');
});

// Route::controller(JobController::class)->group(function () {
//     Route::get('/', 'index');
// });