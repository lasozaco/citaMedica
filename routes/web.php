<?php

use App\Http\Controllers\Auth\Patient\PatientController;
use App\Http\Controllers\Auth\Admin\SpecialtyController;
use App\Http\Controllers\Auth\Doctor\DoctorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// recordatorio para definir rutas de resources debes definirlas de esta manera
// importarlo use App\Http\Controllers\Auth\Doctor\DoctorController
// y luego Route::resource('ruta', NombreControlador::class)
// se me apago el cel, hasta luego compitruenos!!, profe de laura, ella no hizo nada
// @Davicho-Dev en GitHub

// Rutas Medicos
Route::resource('medicos', DoctorController::class)->names('medicos');

// Rutas Especialidades
Route::resource('especialidades', SpecialtyController::class)->names('especialidades');

//Rutas Pacientes
Route::resource('pacientes', PatientController::class)->names('pacientes');
