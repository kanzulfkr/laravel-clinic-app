<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\DoctorScheduleController;
use App\Http\Controllers\Api\ServiceMedicinesController;
use App\Http\Controllers\Api\PatientScheduleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

route::middleware(['auth:sanctum', 'api'])->group(function () {

    Route::apiResource('/doctors', DoctorController::class);

    Route::apiResource('/patients', PatientController::class);

    Route::apiResource('/doctor-schedules', DoctorScheduleController::class);

    Route::apiResource('/service-medicines', ServiceMedicinesController::class);

    Route::apiResource('/patient-schedules', PatientScheduleController::class);
});
