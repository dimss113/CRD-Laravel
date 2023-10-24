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

// create group route teacher
Route::prefix('/teacher')->group(function () {

    // Show all Teacher
    Route::get('/', [TeacherController::class, 'index']);
    
    // Add Teacher
    Route::get('/add', function () {
        return view('teacher.teacher-add');
    });  

    Route::post('/add', [TeacherController::class, 'store']);

    // Edit Teacher
    Route::get('/edit/{id}', [TeacherController::class, 'edit']);

    Route::put('/edit/{id}', [TeacherController::class, 'update']);
    
    // Delete Teacher
    Route::get('/delete/{id}', [TeacherController::class, 'delete']);
    Route::delete('/delete/{id}', [TeacherController::class, 'destroy']);
});

Route::prefix('/classroom')->group(function () {

    // show all classroom
    Route::get('/', [ClassroomController::class, 'index']);

    // add classroom
    Route::get('/add', [ClassroomController::class,'create']);
    Route::post('/add', [ClassroomController::class,'store']);
    Route::get('/detail/{id}', [ClassroomController::class,'detail']);

    // edit classroom
    Route::get('/edit/{id}', [ClassroomController::class,'edit']);
    Route::put('/edit/{id}', [ClassroomController::class,'update']);

    // delete classroom
    Route::get('/delete/{id}', [ClassroomController::class,'delete']);
    Route::delete('/delete/{id}', [ClassroomController::class,'destroy']);
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
