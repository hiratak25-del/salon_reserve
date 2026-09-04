<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('reservation.index');
});

Route::get('/user/index',[UserController::class,'index'])
->name('user.index');

Route::get('/staff/index',[StaffController::class,'index'])
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
    $role = auth()->user()->role;

    if($role === 'admin'){
        return redirect()->route('admin.dashboard');
    }
    if ($role === 'staff'){
        return redirect()->route('staff.dashboard');
    }
    return redirect()->route('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

//管理者
Route::middleware(['auth','role:admin'])->group(function () {

 Route::get('/admin/dashboard',function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

//一般ユーザー
Route::middleware(['auth','role:user'])->group(function () {

 Route::get('/user/dashboard',function(){
        return view('user.dashboard');
    })->name('user.dashboard');

});

//スタッフ
Route::middleware(['auth','role:staff'])->group(function () {

Route::get('/staff/dashboard',function(){
        return view('staff.dashboard');
    })->name('staff.dashboard');

});

require __DIR__.'/auth.php';
