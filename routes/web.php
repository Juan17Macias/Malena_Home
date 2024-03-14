<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::get('/', function () {
    return view('welcome');
});
//  Esta ruta es solo para una la que ustiliza resource es en general para el controllador.
// Route::get('/crud_tienda/productos/create',[ProductosController::class, 'create']);

Route::resource('/crud_tienda/productos',ProductosController::class);