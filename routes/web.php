<?php
namespace App\Http\Controllers;
use App\Http\controllers\ProductController;
use App\Http\controllers\RappiController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\PrimoController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CuadraticaController;

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\NumerosAmigosController;
use App\Models\Cuadratica;
use App\Models\Primernumber;

Route::get('/numeros-amigos', [NumerosAmigosController::class, 'mostrarFormulario']);
Route::post('/numeros-amigos/verificar', [NumerosAmigosController::class, 'verificarAmigos'])->name('verificar.amigos');


Route::get('/numero', [PrimoController::class, 'mostrarFormulario']);
Route::post('/numero/verificar', [PrimoController::class, 'verificarPrimo'])->name('verificar.primo');



Route::get('/curso',[CursoController::class,'create']);
Route::post('/curso',[CursoController::class,'store'])->name('curso.store');

Route::get('/notas', [NotasController::class, 'mostrarFormulario']);
Route::post('/notas/calcular', [NotasController::class, 'calcularPromedio'])->name('calcular.promedio');

Route::get('/frmProducto',[ProductController::class,'formularioProducto']);
Route::post('/formulario-store',[ProductController::class,'productStore'])->name('product.store');

Route::get('/frmrappi',[RappiController::class,'formularioRappi']);
Route::post('/formulario-store',[RappiController::class,'rappiStore'])->name('rappi.store');

Route::get('/primo',[PrimernumberController::class,'formularioPrimo']);
Route::post('/primo-store',[PrimernumberController::class,'primoStore'])->name('primo.store');

Route::get('/cuadratica',[CuadraticaController::class,'cuadratica']);
Route::post('/cuadratia-store',[CuadraticaController::class,'raiz'])->name('cuadratica.store');

Route::get('/pagina',[PaginaController::class,'formularioPagina']);
Route::post('/pagina-store',[PaginaController::class,'paginaStore'])->name('pagina.store');