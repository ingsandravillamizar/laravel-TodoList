@extends('layouts.template')

@section('title', 'Nueva Tarea')

@section('content')
    <h1  class="text-center">Nueva Tarea</h1>
    <div class="container">

    <div class="row">
        <div class = "col-6 offset-3">

        </div>
    </div>
           <form action="{{ route('todo.store')}}" method="post">
           @csrf
           <p>
                <label for="name">Name</label>
                <input class= "form-control" type="text" name= "name" placeholder="Ingrese el Nombre de la Tarea" >
            </p>
            <p>
                <label for="description">Description</label>
                <textarea class= "form-control" name="description" id="" cols="30" rows="5"  ></textarea>
            </p>

            <p>
                <label for="priority">Prioridad</label>
                <select class= "form-control" name="priority" id=""  >
                    <option value="1">Bajo</option>
                    <option value="2">Medio</option>
                    <option value="3">Alto</option>
                </select>
            </p>
            <button type="submit" class= "btn btn-primary">Guardar</button>

           </form>

    </div>
    
   
@endsection