<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MemoryController;
Route::resource('memories', MemoryController::class);

use App\Http\Controllers\TodoController;
Route::resource('todos', TodoController::class)->only(['index', 'store', 'update', 'destroy']);
