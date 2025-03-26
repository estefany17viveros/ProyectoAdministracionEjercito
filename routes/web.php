<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\QuartersController;
use App\Http\Controllers\ArmyCorpsController;

// Rutas para Companies
Route::get('/formularioCompanias', [CompaniesController::class, 'create']);
Route::post('/crearCompanias', [CompaniesController::class, 'store'])->name('companies.store');

// Rutas para Quarters
Route::get('/formularioQuarters', [QuartersController::class, 'create']);
Route::post('/crearQuarters', [QuartersController::class, 'store'])->name('quarters.store');

// Rutas para Armycorps
Route::get('/formularioArmycorps', [ArmycorpsController::class, 'create']);
Route::post('/crearArmycorps', [ArmycorpsController::class, 'store'])->name('armycorps.store');