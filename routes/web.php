<?php

use Illuminate\Support\Facades\Route;
use App\Models\TodoList;
use App\Models\User;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TodoItemController;

Route::get('/', function () {
    $user = User::find(12);
    dd($user->todoList[0]->title);
});



