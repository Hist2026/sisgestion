<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('/admin');


//     redirect
// });


 Route::get('/', function () {
     return view('welcome');


     
 });




Auth::routes(['register'=> false]);




Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index.home')->middleware('auth');


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index')->middleware('auth');




//rutas de  configuracion  

Route::get('/admin/configuracion', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('admin.configuracion.index')->middleware('auth');
Route::post('/admin/configuracion/create', [App\Http\Controllers\ConfiguracionController::class, 'store'])->name('admin.configuracion.store')->middleware('auth');



///rutas gestiones 

Route::get('/admin/gestiones', [App\Http\Controllers\GestionController::class, 'index'])->name('admin.gestiones.index')->middleware('auth');
Route::get('/admin/gestiones/create', [App\Http\Controllers\GestionController::class, 'create'])->name('admin.gestiones.create')->middleware('auth');
Route::post('/admin/gestiones/create', [App\Http\Controllers\GestionController::class, 'store'])->name('admin.gestiones.store')->middleware('auth');

Route::get('/admin/gestiones/{id}/edit', [App\Http\Controllers\GestionController::class, 'edit'])->name('admin.gestiones.edit')->middleware('auth');

Route::put('/admin/gestiones/{id}', [App\Http\Controllers\GestionController::class, 'update'])->name('admin.gestiones.update')->middleware('auth');
Route::delete('/admin/gestiones/{id}', [App\Http\Controllers\GestionController::class, 'destroy'])->name('admin.gestiones.destroy')->middleware('auth');


///rutas niveles 

Route::get('/admin/niveles', [App\Http\Controllers\NivelController::class, 'index'])->name('admin.nivel.index')->middleware('auth');
Route::get('/admin/niveles/create', [App\Http\Controllers\NivelController::class, 'create'])->name('admin.nivel.create')->middleware('auth');
Route::post('/admin/niveles/create', [App\Http\Controllers\NivelController::class, 'store'])->name('admin.nivel.store')->middleware('auth');


Route::put('/admin/niveles/{id}', [App\Http\Controllers\NivelController::class, 'update'])->name('admin.nivel.update')->middleware('auth');
Route::delete('/admin/niveles/{id}', [App\Http\Controllers\NivelController::class, 'destroy'])->name('admin.nivel.destroy')->middleware('auth');


///rutas turnos
Route::get('/admin/turnos', [App\Http\Controllers\TurnoController::class, 'index'])->name('admin.turno.index')->middleware('auth');
Route::get('/admin/turnos/create', [App\Http\Controllers\TurnoController::class, 'store'])->name('admin.turno.create')->middleware('auth');
Route::post('/admin/turnos/create', [App\Http\Controllers\TurnoController::class, 'store'])->name('admin.turno.store')->middleware('auth');


Route::put('/admin/turnos/{id}', [App\Http\Controllers\TurnoController::class, 'update'])->name('admin.turno.update')->middleware('auth');
Route::delete('/admin/turnos/{id}', [App\Http\Controllers\TurnoController::class, 'destroy'])->name('admin.turno.destroy')->middleware('auth');

///rutas PERIODOS
Route::get('/admin/periodos', [App\Http\Controllers\PeriodoController::class, 'index'])->name('admin.periodos.index')->middleware('auth');
Route::post('/admin/periodos', [App\Http\Controllers\PeriodoController::class, 'store'])->name('admin.periodos.store')->middleware('auth');

Route::put('/admin/periodos/{id}', [App\Http\Controllers\PeriodoController::class, 'update'])->name('admin.periodos.update')->middleware('auth');
Route::delete('/admin/periodos/{id}', [App\Http\Controllers\PeriodoController::class, 'destroy'])->name('admin.periodos.destroy')->middleware('auth');


///rutas GRADOS
Route::get('/admin/grados', [App\Http\Controllers\GradoController::class, 'index'])->name('admin.grados.index')->middleware('auth');
Route::post('/admin/grados', [App\Http\Controllers\GradoController::class, 'store'])->name('admin.grados.store')->middleware('auth');

Route::put('/admin/grados/{id}', [App\Http\Controllers\GradoController::class, 'update'])->name('admin.grados.update')->middleware('auth');
Route::delete('/admin/grados/{id}', [App\Http\Controllers\GradoController::class, 'destroy'])->name('admin.grados.destroy')->middleware('auth');


///rutas Paralelos
Route::get('/admin/paraelos', [App\Http\Controllers\ParaleloController::class, 'index'])->name('admin.paraelos.index')->middleware('auth');
Route::post('/admin/paraelos', [App\Http\Controllers\ParaleloController::class, 'store'])->name('admin.paraelos.store')->middleware('auth');

Route::put('/admin/paraelos/{id}', [App\Http\Controllers\ParaleloController::class, 'update'])->name('admin.paraelos.update')->middleware('auth');
Route::delete('/admin/paraelos/{id}', [App\Http\Controllers\ParaleloController::class, 'destroy'])->name('admin.paraelos.destroy')->middleware('auth');


