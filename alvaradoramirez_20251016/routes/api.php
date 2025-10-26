<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/zonas', [ZonaController::class, 'index']);
Route::post('/zonas', [ZonaController::class, 'store']);
Route::get('/zonas/pais/{id_pais}', [ZonaController::class, 'getByPais']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/nuevousuario', [UserController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/usuario', [AuthController::class, 'me'])->middleware('auth:sanctum');


