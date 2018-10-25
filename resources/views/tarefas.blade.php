@extends('layouts.app')

@section('title', 'Tarefas')

@section('content')
    @include('common.errors')
    <form class="form-inline" action="{{ url('tarefas') }}" method="POST">
        @csrf
        <input type="text" class="form-control" name="descricao" placeholder="Tarefa">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Descrição</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>
                        <form action="{{ url('tarefas/'.$tarefa->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

