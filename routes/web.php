<?php
use App\Http\Controllers\NotaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view('/','notas.index');

Route::get('/',[NotaController::class ,'index'])->name('nota.index');


Route::get('/nota/crear',[NotaController::class ,'crear'])->name('nota.crear');

// los datos del formulario los resiven y  los pasan al metodo guardar
Route::post('/nota/guardar',[NotaController::class ,'guardar'])->name('nota.guardar');


Route::get('/nota/editar/{nota_id}',[NotaController::class,'editar'])->name('nota.editar');
Route::put('/nota/actualizar/{nota_id}',[NotaController::class,'actualizar'])->name('nota.actualizar');


Route::get('/nota/mostrar/{nota_id}',[NotaController::class ,'mostrar'])->name('nota.mostrar');



Route::delete('/nota/eliminar/{nota_id}',[NotaController::class ,'eliminar'])->name('nota.eliminar');


