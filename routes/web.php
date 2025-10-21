<?php

use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Contractor routes
Route::resources([
    'contractors' => ContractorController::class,
    'projects' => ProjectController::class
]);

// Route::get('/contractors/create', [ContractorController::class, 'create'])->name('contractors.create');

// Route::get('/contractors/show', [ContractorController::class, 'show'])->name('contractors.show');

// Route::get('/contractors/{$id}/edit', [ContractorController::class, 'edit'])->name('contractors.edit'); //update 
// Route::get('/contractors', [ContractorController::class, 'index'])->name('contractors.index');
// Route::post('/contractors', [ContractorController::class, 'store'])->name('contractors.store');

// Project routes
//Route::get('/projects', [ProjectController::class, 'index']);
