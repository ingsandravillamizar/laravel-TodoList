<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Http\Requests\UpdateTask;
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

    public function store(StoreTask $request){
        $task = Task::create($request->all());
       // return $request->all();
        return redirect()->route('todo.show', $task);
    }

    public function edit(Task $task){
        return view('todo.edit', compact('task'));
    }

    public function update(UpdateTask $request, Task $task){
        // $task->name = $request->name;
        // $task->description = $request->description;
        // $task->priority = $request->priority;
        // $task->save();

        //$task = Task::updated($request->all());
        $task->update($request->all());
         return redirect()->route('todo.show', $task);
        
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('todo.index');
    }
}
