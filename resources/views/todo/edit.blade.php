@extends('layouts.template')

@section('title', 'Editando tarea')

@section('content')

<h1 class="text-center">Editando Tarea {{ $task->id }} </h1>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('todo.update', $task)}}" method="post">
                @csrf
                @method('put')
                <p>
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre" value="{{ $task->name }}">
                </p>
                <p>
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $task->description }}</textarea>
                </p>
                <p>
                      <!-- {{ $task }} -->
                    <label for="priority">Prioridad {{ $task->priority }} </label>
                    <select name="priority" id="" class="form-control">
                        <option value="1" @if ($task->priority == 1) selected @endif> Bajo </option>
                        <option value="2" @if ($task->priority == 2) selected @endif> Medio </option>
                        <option value="3" @if ($task->priority == 3) selected @endif> Alto </option>
                    </select>
                </p>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection