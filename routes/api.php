<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ToyController;
use App\Http\Controllers\Api\ChildController;

Route::get('/santa',[ChildController::class, 'index'])->name('apisantahome');
Route::get('/santa/show/{id}',[ChildController::class, 'show'])->name('apisantashow');
Route::delete('/santa/destroy/{id}',[ChildController::class, 'destroy'])->name('apisantadestroy');
Route::get('/santa/list', [ChildController::class, 'list'])->name('santalist');
Route::post('/santa/store',[ChildController::class, 'store'])->name('apisantastore');
Route::put('/santa/update/{id}',[ChildController::class, 'update'])->name('apisantaupdate');

Route::get('/elf', [ToyController::class, 'index'])->name('apielfhome');
Route::get('/elf/show/{id}',[ToyController::class, 'show'])->name('apielfshow');
Route::delete('/elf/destroy/{id}', [ToyController::class, 'destroy'])->name('apielfdestroy');
Route::post('/elf/store', [ToyController::class, 'store'])->name('apielfstore');
Route::put('/elf/update/{id}', [ToyController::class, 'update'])->name('apielfupdate');


