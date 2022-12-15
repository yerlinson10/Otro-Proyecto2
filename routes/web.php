<?php
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});

// Route::get('cursos', [CursoController::class,'index']);
// Route::get('cursos/create', [CursoController::class,'create']);
// Route::get('cursos/{curso}', [CursoController::class,'show']);
