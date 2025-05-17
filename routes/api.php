<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * API Routes
 *
 * index: Retorna uma lista de usuários.
 * show: Retorna um usuário específico.
 */
Route::get('/users', [UserController::class, 'index']); // GET - http://127.0.0.1:8000/api/users

Route::get('/users/{user}', [UserController::class, 'show']); // GET http://127.0.0.1:8000/api/users/1

/**
 * store: Cria um novo usuário.
 */
Route::post('/users', [UserController::class, 'store']); // POST http://127.0.0.1:8000/api/users

/**
 * update: editar usuário
 */
Route::put('/users/{user}', [UserController::class, 'update']); // PUT http://127.0.0.1:8000/api/users/1