<?php

use Illuminate\Support\Facades\Route;
// Importando a controller aqui, é só chamar ela direto no código
use \App\Http\Controllers\UsersController;

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
/* php artisan make:controller HomeController -r */

// Quando estiver na rota "/", será retornado o método index 
// GetAll users
Route::get('/users', [UsersController::class, 'index']);

/* Após conectar aplicação a um BD no phpMyAdmin > rodar o comando: php artisan migrate --seed */

// GetById users
// name: nomeia a rota para que a view acesse a informação
Route::get('/users/{id}', [UsersController::class, 'show'])->name('user.show');

// Edit user
Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('user.edit');

// Update user
Route::put('/user/update/{id}', [UsersController::class, 'update'])->name('user.update');

// Destroy user
Route::delete('/user/delete/{id}', [UsersController::class, 'destroy'])->name('user.destroy');


// OBS.: Estudos pausados para focar em Next e em React

// ESTOU EM: Aula 11 - 07:45 min
