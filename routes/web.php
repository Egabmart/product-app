<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Cambiamos la ruta principal para que redirija a la lista de productos
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Rutas para el CRUD de Categorías
Route::resource('categories', CategoryController::class);

// Rutas para el CRUD de Productos
Route::resource('products', ProductController::class);
