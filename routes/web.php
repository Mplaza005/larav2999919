<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\EjerciciosController;



Route::get('/saludo',[ClaseController::class,'saludo']);



// Route::get('/areatriangulo/{base}/{altura}',[AreaController::class,'area_triangulo']);
// Route::get('/areacirculo',[AreaController::class,'area_circulo']);
// Route::get('/cuadratica',[AreaController::class,'cuadratica']);
// Route::get('/primo',[EjerciciosController::class,'primo']);
