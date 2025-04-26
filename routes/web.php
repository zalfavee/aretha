<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MembershipController;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/booking', [BookingController::class, 'create']);
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/membership', [MembershipController::class, 'create']);
Route::post('/membership', [MembershipController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
