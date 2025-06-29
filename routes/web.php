<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;

// ✅ FIXED: Only one / route
Route::get('/', function () {
    return redirect('/dashboard');
});

// ✅ All routes protected by auth
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
    return view('dashboard'); // Now it's just pure HTML
})->middleware(['auth'])->name('dashboard');


    // Tasks
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';