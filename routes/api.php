<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\Api\ChildController;

Route::get('/',[ChildController::class, 'index'])->name('apisantahome');
Route::get('/santa/{id}',[ChildController::class, 'show'])->name('apisantashow');
Route::delete('/santa/{id}',[ChildController::class, 'destroy'])->name('apisantadestroy');
Route::post('/santa',[ChildController::class, 'store'])->name('apisantastore');
Route::put('/santa/{id}',[ChildController::class, 'update'])->name('apisantaupdate');

Route::get('/elf', [ToyController::class, 'index'])->name('apielfhome');
Route::delete('/elf/{id}', [ToyController::class, 'destroy'])->name('apielfdestroy');
Route::post('/elf', [ToyController::class, 'store'])->name('apielfstore');
Route::put('/elf/{id}', [ToyController::class, 'update'])->name('apielfupdate');
Route::get('/elf/{id}',[ToyController::class, 'show'])->name('apielfshow');

