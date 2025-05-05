<?php

use App\Http\Controllers\NivelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nivels',[NivelController::class,'index'])->name('nivels.index');
Route::get('/nivels/create',[NivelController::class,'create']);
Route::post('/nivels',[NivelController::class,'store'])->name('nivels.store');