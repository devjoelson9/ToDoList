<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoListController;

use Illuminate\Support\Facades\Route;

//rota para a tela principal da pagina
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/listarTarefas', [TodoListController::class, 'listarTarefas'])->name('tarefas.listar');
//rotas para criar a tarefa
Route::get('/criarTarefa', [TodoListController::class, 'create'])->name('tarefas.criar');
Route::post('/criarTarefa', [TodoListController::class, 'criarTarefa'])->name('tarefas.create');

//rotas para editar a tarefa
Route::get('/atualizarTarefa/{tarefa}/edit', [TodoListController::class, 'editar'])->name('tarefas.editar');
Route::put('/atualizarTarefa/{tarefa}', [TodoListController::class, 'editarTarefa'])->name('tarefas.edit');

//rota para excluir o usuario
Route::delete('/deletarTarefa/{tarefa}', [TodoListController::class, ''])->name('tarefas.deletar');
