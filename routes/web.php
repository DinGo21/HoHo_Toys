<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\ChildController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/santa', [ChildController::class, 'index'])->name('santa');
Route::get('/santa/show/{id}',[ChildController::class, 'show'])->name('santashow');
Route::delete('/santa/destroy/{id}', [ChildController::class, 'delete'])->name('santadestroy');
Route::get('/santa/list', [ChildController::class, 'list'])->name('santalist');
Route::get('/santa/create', [ChildController::class, 'create'])->name('santacreate');
Route::post('/santa/store', [ChildController::class, 'store'])->name('santastore');
Route::get('/santa/{id}', [ChildController::class, 'edit'])->name('santaedit');
Route::post('/santa/update/{id}', [ChildController::class, 'update'])->name('santaupdate');

Route::get('/elf', [ToyController::class, 'index'])->name('elf');
Route::get('/elf/show/{id}',[ToyController::class, 'show'])->name('elfshow');
Route::delete('/elf/destroy/{id}', [ToyController::class, 'destroy'])->name('elfdestroy');
Route::get('/elf/create', [ToyController::class, 'create'])->name('elfcreate');
Route::post('/elf/store', [ToyController::class, 'store'])->name('elfstore');
Route::get('/elf/{id}', [ToyController::class, 'edit'])->name('elfedit');
Route::post('/elf/update{id}', [ToyController::class, 'update'])->name('elfupdate');







