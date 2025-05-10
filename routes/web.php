<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/nivels',[NivelController::class,'index'])->name('nivels.index');
// Route::get('/nivels/create',[NivelController::class,'create']);
// Route::post('/nivels',[NivelController::class,'store'])->name('nivels.store');

Route::resource('/nivels', NivelController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/categorias', CategoriaController::class);
Route::resource('/turmas', TurmaController::class);
Route::resource('/documentos', DocumentoController::class);