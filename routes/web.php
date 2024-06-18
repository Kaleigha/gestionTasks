<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TaskController::class, 'index']);

Route::get('/index/nouveau', [TaskController::class, 'create'])->name('newTask');
Route::post('/index/nouveau', [TaskController::class, 'store']);

Route::get('/index/update/{id}', [TaskController::class, 'update'])->name('updateTask');

Route::get('/index/delete/{id}', [TaskController::class, 'delete'])->name('deleteTask');
