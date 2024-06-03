<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BrgyController;

Route::get('/', function () {
    return view('welcome');
});

// Route for the 'cities' resource
Route::resource('cities', CityController::class);

// Route for the 'brgys' resource
Route::resource('brgys', BrgyController::class);

// Route for the 'patients' resource
Route::resource('patients', PatientController::class);

// Route for the 'reports' resource
Route::get('reports/awareness', [ReportController::class, 'awareness'])->name('reports.awareness');
Route::get('reports/corona-virus', [ReportController::class, 'coronaVirus'])->name('reports.coronaVirus');