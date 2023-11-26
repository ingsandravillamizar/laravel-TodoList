<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   

    public function index(){
        $tasks = Task::paginate(20);
        return view("todo.index",compact('tasks'));
    }

    public function show(Task $task){
        return view('todo.show', compact('task'));
    }
    // Recibe un parametro $Task de tipo Task (del modelo de task)

    public function create(){
        return view('todo.create');
    }



    public function store(Request $request){

        //Validar :  los campos obligatorios
       $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'priority'=> 'required'
       ]);

        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->priority = $request->priority;



        
        $task->save();
        return redirect()->route('todo.show', $task);
    }

    public function edit(Task $task){
        // return $task;
        return view('todo.edit', compact('task'));
    }
   


    public function update(Request $request, Task $task){
        $task->name = $request->name;
        $task->description = $request->description;
        $task->priority = $request->priority;

        $task->save();
        return redirect()->route('todo.show', $task);
    }
}
