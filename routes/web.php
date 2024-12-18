<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\ChildController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/santa', [ChildController::class, 'index'])->name('santa');
Route::get('/santa/show/{id}',[ChildController::class, 'show'])->name('santashow');
Route::delete('/santa/{id}', [ChildController::class, 'destroy'])->name('santadestroy');
Route::get('/santa/create', [ChildController::class, 'create'])->name('santacreate');
Route::post('/santa/store', [ChildController::class, 'store'])->name('santastore');
Route::get('/santa/edit/{id}', [ChildController::class, 'edit'])->name('santaedit');
Route::put('/santa/{id}', [ChildController::class, 'update'])->name('santaupdate');

Route::get('/elf', [ToyController::class, 'index'])->name('elf');
Route::get('/elf/show/{id}',[ToyController::class, 'show'])->name('elfshow');
Route::delete('/elf/{id}', [ToyController::class, 'destroy'])->name('elfdestroy');
Route::get('/elf/create', [ToyController::class, 'create'])->name('elfcreate');
Route::post('/elf/store', [ToyController::class, 'store'])->name('elfstore');
Route::get('/elf/edit/{id}', [ToyController::class, 'edit'])->name('elfedit');
Route::put('/elf/{id}', [ToyController::class, 'update'])->name('elfupdate');







