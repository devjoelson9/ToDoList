<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller{
    public function listarTarefas(){
        $tarefa = Tarefa::all();

        return view('listar', compact('tarefas'));
    }

    public function create(){
        return view('create');
    }

    public function criarTarefa(Request $request){
        Tarefa::create{[
            'titulo'=> $request -> input(''),
            'descricao' => $request -> input(''),
            'dataVencimento' => $request -> input(''),
            'importante' => $request -> has(''),
        ]};
        return redirect()->route('home');
    }

    public function editar(Tarefa $tarefa){
        return view('edit', compact('tarefas'));
    }

    public function editarTarefa(Request $request, Tarefa $tarefa){
        Tarefa::update{[
            'titulo'=> $request -> input(''),
            'descricao' => $request -> input(''),
            'dataVencimento' => $request -> input(''),
            'importante' => $request -> has(''),
        ]};
        return redirect()->route('home');
    }

    public function deletarTarefa(Tarefa $tarefa){
        $tarefa->delete();
        return redirect->route('home');
    }
}