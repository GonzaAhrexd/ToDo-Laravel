<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/to-do', function(){
    return view('app');
});

// Ruta raíz que apunta al método index del controlador TodosController
Route::get('/', [TodosController::class, 'index'])->name('todos.index');

// Ruta para almacenar una nueva tarea
Route::post('/tareas', [TodosController::class, 'store'])->name('todos.store');

// Ruta para mostrar la lista de tareas
Route::get('/tareas', [TodosController::class, 'index'])->name('todos.index');
// Eliminar una tarea
Route::delete('/tareas/{id}', [TodosController::class, 'destroy'])->name('todos.destroy');
Route::patch('/tareas', [TodosController::class, 'edit'])->name('todos.edit');