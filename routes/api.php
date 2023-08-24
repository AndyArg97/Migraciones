<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 // Consulta #1
Route::get('/getAutores', [AutorController::class, 'mostrarAutores']);
 // Consulta #2
Route::get('/getNoticias/{autorId}', [AutorController::class, 'mostrarNoticias']);
 // Consulta #3
Route::post('/insertarAutor/{nombreAutor}', [AutorController::class, 'insertarAutor']);
 // Consulta #4
Route::get('/buscarAutor/{nombreAutor}', [AutorController::class, 'buscarAutor']);
 // Consulta #5
Route::get('/contarNoticias/{autorId}', [AutorController::class, 'contarNoticas']);
 // Consulta #6
Route::get('/buscarNoticia/{noticiaId}', [AutorController::class, 'verificarAutorDeNoticia']);
