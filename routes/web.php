<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\propiedadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [propiedadController::class,'index'])->name('propiedad.home');
Route::get ('/propiedades/crear',[propiedadController::class,'create'])->name('propiedad.create');
Route::post('/propiedades/guardar',[propiedadController::class,'store'])->name('propiedad.store');


//get: mostrar o acceder
//post: guardar
//put: actualizar
//delete: eliminar  