<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\UserController;

Route::post('user/register',[UserController::class, 'register']);
Route::post('user/login',[UserController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
 Route::apiResource('todo-items', TodoItemController::class);
 Route::apiResource('todo-lists', TodoListController::class);
 Route::post('todo-items/uncompleted/{id}', [TodoItemController::class, 'uncompleted',]);
 Route::post('todo-items/completed/{id}', [TodoItemController::class, 'completed',]);
 Route::post('todo-lists/uncompleted/{id}', [TodoListController::class, 'uncompleted',]);
 Route::post('todo-lists/completed/{id}', [TodoListController::class, 'completed',]);
});

