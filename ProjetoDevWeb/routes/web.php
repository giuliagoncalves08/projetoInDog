<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrospetsController;
use App\Http\Controllers\CadastropasseadoresController;
use App\Http\Controllers\CadastroclientesController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LoginController;

//Página Home
Route::get('/', [HomeController::class, 'index']);

//Página de Login
Route::get('/', [LoginController::class, 'login']);

//Cadstro de Pet
Route::get('/createPet', [CadastrospetsController::class, 'create']);
Route::get('/indexPet', [CadastrospetsController::class, 'index']);
Route::post('/storePet', [CadastrospetsController::class, 'store']);
Route::delete('/deletePet',[CadastrospetsController::class,'delete']);
Route::get('/{id}/edit', [CadastrospetsController::class, 'edit']);
Route::put('/updatePet', [CadastrospetsController::class, 'update']);
