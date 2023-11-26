@extends('layouts.template')

@section('title', 'Bienvenida')

@section('content')
   <h1>Bienvenido a Todo List</h1>
   <a href="{{route('todo.create')}}">"Crear nueva tarea"</a>
    <ul>
        @foreach($tasks as $task)
            <a href="{{ route('todo.show', $task) }}">
            <li>{{$task->name}}</li>
        @endforeach
    </ul>
   
    {{ $tasks->links() }}

@endsection
