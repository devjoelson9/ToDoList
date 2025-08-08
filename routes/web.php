<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoListController;

use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'index'])->name('home');
route::get('/todolist', [TodoListControllerController::class, 'index'])->name('TodoList.index');
route::get('/todolist/create', [TodoListControllerController::class, 'create'])->name('TodoList.create');
route::post('/todolist', [TodoListControllerController::class, 'store'])->name('TodoList.store');
route::post('/todolist/{toDo}', [TodoListControllerController::class, 'show'])->name('TodoList.show');
route::post('/todolist/{toDo}/edit', [TodoListControllerController::class, 'edit'])->name('TodoList.edit');
route::put('/todolist/{toDo}', [TodoListControllerController::class, 'update'])->name('TodoList.update');
route::delete('/todolist/{toDo}', [TodoListControllerController::class, 'destroy'])->name('TodoList.destroy');


