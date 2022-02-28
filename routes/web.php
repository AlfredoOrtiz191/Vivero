<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controller; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('primero');
});
/*Route::get('aparato/{nombre}', function($nombre){
    return 'Aparato:'.$nombre;
});*/

/*Route::get('aparato/{nombre?}', function($nombre=null){
    return 'Aparato:'.$nombre;
});
/*Route::get('aparato/{nombre}', function($nombre){
    return $nombre; })->where('nombre','[A-Za-z]+');*/
/*
Route::get('aparato/{nombre}/{repeticiones}', function($nombre,$repeticiones){
    return 'En el aparato' .$nombre. 'realizar '.$repeticiones.'series'; 
})->where(['nombre'=> '[A-Za-z]+', 'repeticiones'=>'[0-9]+']);
Route::get('saludo/{nombre}/{apellido}', function($nombre,$apellido){
    return 'Bienvenido ' .$nombre. ' pero te dire Sr. '.$apellido.' para sonar mas profecional '; 
})->where(['nombre'=> '[A-Za-z]+', 'apellido'=> '[A-Za-z]+']);*/

//Rutas hacia los controladores
/*
Route::get('aparato/{repeticiones}',[Controller::class,'show']
    )->where('repeticiones','[0-9]+');*/
    Route::get('login',[Controller::class,'login']);
    Route::get('carrito',[Controller::class,'listaCategorias']);
    Route::get('principal',[Controller::class,'index']);

    //Rutas hacia clientes
    //Route::get('/clientes/general',[Controller::class,'generalC']);
    //Route::get('/clientes/lista',[Controller::class,'listaC']);
    //Route::get('/clientes/crear',[Controller::class,'crearC']);
    //Route::post('/clientes/crear',[Controller::class,'guardarC']);

    //Rutas hacia provedores
    //Route::get('/provedores/general',[Controller::class,'generalP']);
    //Route::get('/provedores/lista',[Controller::class,'listaP']);
    //Route::get('/provedores/crear',[Controller::class,'crearP']);
    //Route::post('/provedores/crear',[Controller::class,'guardarP']);

    //Rutas hacia usuarios
    Route::get('/usuarios/general',[Controller::class,'generalU']);
    Route::get('/usuarios/lista',[Controller::class,'listaU']);
    Route::get('/usuarios/crear',[Controller::class,'crearU']);
    Route::post('/usuarios/crear',[Controller::class,'guardarU']);

    //Rutas hacia lista productos carrito
    //Route::get('/canasta',[Controller::class,'canasta']);

    //Rutas hacia productos
    //Route::get('/productos/general',[Controller::class,'generalPr']);
    //Route::get('/productos/lista',[Controller::class,'listaPr']);
    //Route::get('/productos/crear',[Controller::class,'crearPr']);
    //Route::post('/productos/crear',[Controller::class,'guardarPr']);

    
Auth::routes();
Route::get('/', [App\Http\Controllers\vistapController::class, 'lista']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Rutas hacia clientes
Route::get('/clientes', [App\Http\Controllers\clienteController::class, 'index']);
Route::get('/clientes/detalle/{id}', [App\Http\Controllers\clienteController::class, 'show']);
Route::get('/clientes/crear', [App\Http\Controllers\clienteController::class, 'create']);
Route::post('/clientes/save', [App\Http\Controllers\clienteController::class, 'store']);
Route::get('/clientes/editar/{id}', [App\Http\Controllers\clienteController::class, 'edit']);
Route::post('/clientes/update/{id}', [App\Http\Controllers\clienteController::class, 'update']);
Route::get('/clientes/eliminar/{id}', [App\Http\Controllers\clienteController::class, 'destroy']);

//Rutas hacia provedores
Route::get('/provedores', [App\Http\Controllers\provedorController::class, 'index']);
Route::get('/provedores/detalle/{id}', [App\Http\Controllers\provedorController::class, 'show']);
Route::get('/provedores/crear', [App\Http\Controllers\provedorController::class, 'create']);
Route::post('/provedores/save', [App\Http\Controllers\provedorController::class, 'store']);
Route::get('/provedores/editar/{id}', [App\Http\Controllers\provedorController::class, 'edit']);
Route::post('/provedores/update/{id}', [App\Http\Controllers\provedorController::class, 'update']);
Route::get('/provedores/eliminar/{id}', [App\Http\Controllers\provedorController::class, 'destroy']);

//Rutas hacia productos
Route::get('/productos', [App\Http\Controllers\productoController::class, 'index']);
Route::get('/productos/detalle/{id}', [App\Http\Controllers\productoController::class, 'show']);
Route::get('/productos/crear', [App\Http\Controllers\productoController::class, 'create']);
Route::post('/productos/save', [App\Http\Controllers\productoController::class, 'store']);
Route::get('/productos/editar/{id}', [App\Http\Controllers\productoController::class, 'edit']);
Route::post('/productos/update/{id}', [App\Http\Controllers\productoController::class, 'update']);
Route::get('/productos/eliminar/{id}', [App\Http\Controllers\productoController::class, 'destroy']);

//Rutas hacia usuarios
Route::get('/usuarios', [App\Http\Controllers\usuarioController::class, 'index']);
Route::get('/usuarios/detalle/{id}', [App\Http\Controllers\usuarioController::class, 'show']);
Route::get('/usuarios/crear', [App\Http\Controllers\usuarioController::class, 'create']);
Route::post('/usuarios/save', [App\Http\Controllers\usuarioController::class, 'store']);

//Rutas hacia carrito
Route::get('/cart', [App\Http\Controllers\carritoController::class, 'index']);
Route::get('/add-to-cart/{id}', [App\Http\Controllers\carritoController::class, 'addToCart']);
Route::get('/reduce/{id}', [App\Http\Controllers\carritoController::class, 'reduce']);
