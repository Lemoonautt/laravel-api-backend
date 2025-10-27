<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::apiResource('productos',ProductoController::class);
Route::apiResource('categorias',CategoriaController::class);
