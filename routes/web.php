<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorarioController;
// use App\Http\Controllers\ProgramacionController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\ReporteController;

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

/* Route::get('/', function () {
    return view('login');
}); */

/*-------------------------- IDENTIFICACION DE USUARIOS ---------------------------------*/

Route::get('/',[UserController::class,'showlogin']);
Route::post('/identificacion', [UserController::class,'verificalogin'])->name('identificacion'); 
Route::get('/home',[HomeController::class,'index'])->middleware('can:home')->name('home');
Route::post('/',[UserController::class,'salir'])->name('logout');

/*-------------------------- ALUMNO ---------------------------------*/

Route::resource('alumno',AlumnoController::class);
Route::get('cancelarAlumno', function () {      //Cancelar
    return redirect()->route('alumno.index')->with('datos','Acción Cancelada...!');
})->name('cancelarAlumno');

/*-------------------------- PROFESOR ---------------------------------*/

Route::resource('Profesor',ProfesorController::class);
Route::get('cancelarProfesor', function () {    //Cancelar
    return redirect()->route('Profesor.index')->with('datos','Acción Cancelada...!');
})->name('cancelarProfesor');

/* -------------------------- MATRICULA ------------------------------- */

route::resource('Matricula',MatriculaController::class);
Route::get('cancelar', function () {
    return redirect()->route('Matricula.index')->with('datos','Acción Cancelada...!');
})->name('cancelar');

/* -------------------------- HORARIO ------------------------------- */
Route::resource('horario', HorarioController::class);
Route::get('cancelarHorario', function () {
    return redirect()->route('horario.index')->with('datos','Acción Cancelada...!');
})->name('cancelarHorario');

/* -------------------------- PROGRAMACION ------------------------------- */

Route::resource('programacionclase', ProgramaController::class);
Route::get('nivel/', [ProgramaController::class,'nivel'])->name('nivel');
Route::get('edit', [ProgramaController::class,'edit'])->name('edit');


/* -------------------------- REPORTES ------------------------------- */
Route::resource('reportes',ReporteController::class);

/* Route::get('/index',[AlumnoController::class,'index'])->name('index'); */
route::get('/download-pdf',[AlumnoController::class,'downloadPDF'])->name('download-pdf');   
route::get('/download-pdf2',[ProfesorController::class,'downloadPDF'])->name('download-pdf2'); 
route::get('/download-pdf1',[ReporteController::class,'downloadPDF'])->name('download-pdf1');
route::get('/download-pdf3',[MatriculaController::class,'downloadPDFCarnet'])->name('download-pdf3'); 

/* ---------------------------- ROLES Y PERMISOS --------------------- */
Route::resource('usuarios', UserController::class);

/* route::get('/ListaPeriodo',[ReporteController::class,'listado'])->name('listado');  */