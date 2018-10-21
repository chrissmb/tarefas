@extends('layouts.app')

@section('title', 'Tarefas')

@section('content')
    <form class="form-inline" action="teste">
        <input type="text" class="form-control" placeholder="Tarefa">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection

