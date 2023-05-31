<?php

use Illuminate\Support\Facades\Route;

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

// inicia o servidor
/* php artisan serve
Iniciará o servidor em http://localhost:8000 */

// Retorna a view padrão do Laravel
/* Route::get('/', function () {
    return view('welcome');
}); */

// Retorna o texto
/* Route::get('/', function () {
    return ('Hello, world');
}); */

// criar um crontrolador (o comando -r já trás os metodos resouces do laravel (os verbos HTTP)): 
/* // php artisan make:controller HomeController -r */

// Quando estiver na rota "/", será retornado o método index 
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

// ESTOU EM: Aula  - 17:50 min
/* TODO: Conectar essa aplicação a um BD no phpMyAdmin (o passo a passo está no GPT) > rodar o comando: php artisan migrate --seed */
