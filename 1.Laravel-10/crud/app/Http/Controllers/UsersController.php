<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // Retornando a view que está na pasta user (dentro da pasta "/app/resources/views")
        /* return view('user.index'); */

        // getAll na tabela users do BD
        $users = User::all();

        // Retornando os dados de getAll
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // Esse método retorna 1 usuário de acordo com o id

        //  dd faz o log da variável para o código, faz um log do id que está na url
        /* dd($id); */

        // GetById user no BD
        $user = User::find($id);

        // log do user
        // dd('user->email: ', $user->email);

        // Retorna os dados do GetById
        return view('user.show', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        // Esse método edita um usuário específico

        /* dd($id); */

        $user = User::find($id);

        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        /* dd($id); */

        // Acessando todos os dados da request
        /* dd($request); */

        // Retorna os dados enviados via formulário
        /* dd($request->all()); */

        // Retorna apenas o nome e o email enviados pelo formulário
        /* dd($request->only(['name', 'email'])); */

        $data = $request->only(['name', 'email']);

        /* dd($data); */

        // Acessando o usuário específico no BD
        $user = User::find($id);

       /*  dd($user); */

       // Atualizando o BD com as informações que vem do formulário
       $user->update($data);

       // Após atualizar o user, retorna para a página anterior: o formulário
       return redirect()->back();
    }

    public function destroy($id)
    {
        dd($id);
    }
}
