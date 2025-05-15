<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrmController;


Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
