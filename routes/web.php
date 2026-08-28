<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StaffController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('reservation.index');
});

Route::get('/staff',[StaffController::class,'index'])
->name('staff.index');

Route::get('/reservation',[ReservationController::class,'index'])
->name('reservation.index');

Route::get('/reservation/create',[ReservationController::class,'create'])
->name('reservation.creaate');

Route::get('/reservation/create',[ReservationController::class,'create'])
->name('reservation.create');

Route::post('/reservation',[ReservationController::class,'store'])
->name('reservation.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
