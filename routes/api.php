<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\Api\ChildController;

Route::get('/',[ChildController::class, 'index'])->name('apiSantaHome');
Route::get('/santa/{id}',[ChildController::class, 'show'])->name('apiSantaShow');
Route::delete('/santa/{id}',[ChildController::class, 'destroy'])->name('apiSantaDestroy');
Route::post('/santa',[ChildController::class, 'store'])->name('apiSantaStore');
Route::put('/santa/{id}',[ChildController::class, 'update'])->name('apiSantaUpdate');

Route::get('/elf', [ToyController::class, 'index'])->name('apiElvesHome');
Route::delete('/elf/{id}', [ToyController::class, 'destroy'])->name('apiElvesDestroy');
Route::post('/elf', [ToyController::class, 'store'])->name('apiElvesStore');
Route::put('/elf/{id}', [ToyController::class, 'update'])->name('apiElvesUpdate');
Route::get('/elf/{id}',[ToyController::class, 'show'])->name('apiElvesShow');

