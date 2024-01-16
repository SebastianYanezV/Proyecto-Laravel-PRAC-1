<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ExportController;

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
    return view('app');
});

/*Route::get('/form', function () {
    return view('formulario.index');
});*/

Route::get('/forms/finalFormulario', function () {
    return view('formulario/finalFormulario.final');
});

Route::get('/registroRespuestasFormularios/exportarAExcel', [ExportController::class, 'exportToExcel'])->name('exportToExcel');
//Route::get('/formulario', [FormController::class, 'create'])->name('formulario.create');
//Route::get('/registroRespuestasFormularios', [FormController::class, 'index'])->name('registroRespuestasFormularios');
//Route::delete('/registroRespuestasFormularios/{id}', [FormController::class, 'destroy'])->name('formulario.destroy');
//Route::get('/formulario/editar/{id}', [FormController::class, 'edit'])->name('formulario.edit');
//Route::put('/formulario/actualizar/{id}', [FormController::class, 'update'])->name('formulario.update');

Route::resource('forms', FormController::class);