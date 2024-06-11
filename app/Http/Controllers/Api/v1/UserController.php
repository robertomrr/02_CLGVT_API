<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\UserResource;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Antes de utilizar o resource 
        //return User::all();
        //Utilizando o resource 
        return UserResource::collection(resource:User::All());
    }

    /**
     * Show the form for creating a new resource.
     *  Não se aplica para API
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->toArray();
        //
        //return $request;

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->email_verified_at = $request->email_verified_at;
        $user->remember_token = $request->remember_token;
        $user->save();
        // Verificando se o usuário foi criado com sucesso
        if ($user) {
            echo 'Usuário criado com sucesso!';
        } else {
            echo 'Erro ao criar usuário.';
        }   

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new UserResource(resource:User::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *  Não se aplica para API
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontrar o usuário pelo ID
        $user = User::find($id);

        if ($user) {
            // Atualizar o nome do usuário
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->email_verified_at = $request->email_verified_at;
            $user->remember_token = $request->remember_token;
            // Salvar as alterações
            $user->save();

            echo 'Usuário atualizado com sucesso!';
        } else {
            echo 'Usuário não encontrado.';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontrar o usuário pelo ID
        $user = User::find($id);

        if ($user) {
            // Remover o usuário
            $user->delete();

            echo 'Usuário removido com sucesso!';
        } else {
            echo 'Usuário não encontrado.';
        }
    }
}
