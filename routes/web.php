<?php

use App\Http\Controllers\Admin\PatientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Medicos
//Route::resource('medicos', 'App\Http\Controllers\admin\DoctorController');

//Rutas Pacientes 
Route::resource('pacientes', App\Http\Controllers\admin\PatientController::class);