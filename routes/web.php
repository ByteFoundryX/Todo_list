<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TodoController::class , 'index'])->name('todo.index');
Route::get('/todos/create', [TodoController::class , 'create'])->name('todo.create');
Route::get('/todos/{todo}', [TodoController::class , 'show'])->name('todo.show');
Route::post('/todos', [TodoController::class , 'store'])->name('todo.store');

//Categories Routes

Route::get('/Categories', [CategoryController::class , 'index'])->name('Category.index');
Route::get('/Categories/create', [CategoryController::class , 'create'])->name('Category.create');
Route::post('/Categories', [CategoryController::class , 'store'])->name('Category.store');
Route::get('/Categories/{category}/edit', [CategoryController::class , 'edit'])->name('Category.edit');
Route::put('/Categories/{category}', [CategoryController::class , 'update'])->name('Category.update');
Route::delete('/Categories/{category}', [CategoryController::class , 'destroy'])->name('Category.destroy');
