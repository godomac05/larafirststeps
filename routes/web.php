<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/test',function(){
    return "Welcome";
});

Route::get('/hello',function(){
    return view('test');
});

//Route::get('/crud',function(){
//    return view('crud/index');
//})

Route::get('/crudy',function(){
    //Pasar parametros
    $age = 33;
    $data = ['name' => 'Godo', 'age' => $age];


    return view('crud/index',$data);
})->name('crud');

Route::get('/test',function(){
    return view('test');
});

Route::get('/contacto',function(){
    
    //Redireccion por Ruta
    //return redirect('/contacto1',303);

    //Redirección por Nombre
    //return redirect()->route('contacto1');

    //Redireccion a partir de Laravel 9
    //return to_route('contacto1');
    
    return view('contact', ['name' => 'Godo']);
})->name('contacto');

Route::get('/contacto1',function(){
    return view('contact1', ['name' => 'Godo']);
})->name('contacto1');

Route::get('test',[PrimerControlador::class,'index']);
//Ruta con parametro, se tiene que referenciar en este caso en Primercontrolador.php
//Signo de interrogación es para que el parametro sea opcional
Route::get('otro/{post?}/{post2?}',[PrimerControlador::class,'otro']); //http://larafirststeps1.test/otro/5

Route::get('test2',[SegundoControlador::class,'index']);

//Agrupa todos los tipo clase
//Route::resource('post', PrimerControlador::class);

//Se crea la Ruta para el MVC Post.php
Route::resource('post', PostController::class);
