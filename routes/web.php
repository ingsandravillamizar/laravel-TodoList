<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', HomeController::class);
Route::get('home', ['HomeController::class', 'index']);

Route::get('ejemplo',function(){
    echo "hola desde la ruta de ejemplo";
});

Route::get('cursos/show',function(){
    echo "Vista de  cursos";
});
Route::get('cursos/create',function(){
    return "Formuario para crear un nuevo curso";
});
Route::get('cursos/show/{curso}',function($curso){
    return "Vista del curso $curso";
});

Route::get('cursos/show/{curso}/{categoria?}',function($curso,$categoria=null){
   if($categoria){
    return "Vista del curso $curso, categoría , $categoria";
   }else{
    return "Vista del curso $curso ";
   }
    
   
});

// // Parametros opcionales
// Route::get('cursos/show/{curso}/{categoria}',function($curso,$categoria){
//     return "Vista del curso $curso, cat , $categoria";
 // return 'Vista del curso' ,  $curso, ' ,cat ' , $categoria;
//  });
 

//Estas rutas son un grupo de rutas controladas por TodoController
Route::controller(TodoController::class)->group(function(){
    //Por defecto llama el metodo invoke
    Route::get('todo','index');  // listar 
    Route::get('todo/create','create'); // formulario nueva tarea
    Route::get('todo/{task}','show');  //mostrarme la tarea
});

