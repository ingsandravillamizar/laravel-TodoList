<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| Route::metodo('ruta',accion)
*/

Route::get('/', function(){
    return view('home');
})->name('home');  //listar los todo's



//Estas rutas son un grupo de rutas controladas por TodoController
Route::controller(TodoController::class)->group(function(){
    //Por defecto llama el metodo invoke
    Route::get('todo','index')->name('todo.index');  // listar 
    Route::get('todo/create','create')->name('todo.create') ; // formulario nueva tarea
    Route::get('todo/{task}','show')->name('todo.show') ;  //mostrarme la tarea

    Route::post('todo', 'store')->name('todo.store');           //Para Guardar
    Route::get('todo/{task}/edit', 'edit')->name('todo.edit');  //Para Editar
    Route::put('todo/{task}', 'update')->name('todo.update');  
    Route::delete('todo/{task}', 'destroy')->name('todo.destroy');
});

// Route::resource('todo', TodoController::class);


Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');