<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/teacher', function () {
    return view('teacher.teacher');
})->middleware(['auth', 'verified'])->name('teacher');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::prefix('/barang')->group(function () {
        // show all barang
        Route::get('/', [BarangController::class, 'index']);
    
        // add barang
        Route::get('/add', [BarangController::class, 'create']);
        Route::post('/add', [BarangController::class, 'store']);
    
        // edit barang
        Route::get('/edit/{id}', [BarangController::class, 'edit']);
        Route::put('/edit/{id}', [BarangController::class, 'update']);
        Route::get('/detail/{id}', [BarangController::class, 'detail']); 
        
        Route::get('/delete/{id}', [BarangController::class, 'delete']);
        Route::delete('/delete/{id}', [BarangController::class, 'destroy']);
    });    
});


require __DIR__.'/auth.php';
