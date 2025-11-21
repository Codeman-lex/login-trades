<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/case-studies', function () {
    return view('case-studies');
})->name('case-studies');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

Route::get('/architecture', function () {
    return view('pages.architecture');
})->name('architecture');

Route::get('/performance', function () {
    return view('pages.performance');
})->name('performance');

Route::get('/markets', function () {
    return view('pages.markets');
})->name('markets');

Route::get('/security', function () {
    return view('pages.security');
})->name('security');

Route::get('/api', function () {
    return view('pages.api');
})->name('api');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/careers', function () {
    return view('pages.careers');
})->name('careers');

Route::get('/legal', function () {
    return view('pages.legal');
})->name('legal');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/deposit/confirm', [App\Http\Controllers\DepositController::class, 'confirm'])->name('deposit.confirm');
    Route::post('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('withdrawal.store');
});

require __DIR__.'/auth.php';
