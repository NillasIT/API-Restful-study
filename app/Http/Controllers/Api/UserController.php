<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Retorna uma lista de usuários.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $users = User::get();
        return response()->json([
            'status' => 'API Funcionando',
            'users' => $users,
        ], 200);
    }

    /**
     * Retorna um usuário específico.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user): JsonResponse
    {
        return response()->json([
            'status' => 'API Funcionando',
            'user' => $user,
        ]);
    }

    /**
     * Cria um novo usuário.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        // Iniciar transação
        DB::beginTransaction();

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ], [
                'name.required' => 'Campo nome é obrigatório',
                'email.required' => 'Campo email é obrigatório',
                'email.unique' => 'Email já cadastrado',
                'password.min' => 'Campo senha deve ter no mínimo 8 caracteres',
                'password.confirmed' => 'Campo senha não confere',
            ]);

            $user = User::create($validated);

            // Operação concluída com êxito
            DB::commit();

            return response()->json([
                'status' => 'Successo',
                'message' => 'Usuário criado com sucesso',
                'user' => $user,
            ], 201);
        } catch (Exception $e) {
            // Operação não concluída com êxito
            DB::rollBack();

            // Retorna uma mensagem de erro com status 400
            return response()->json([
                'status' => 'error',
                'message' => 'Erro ao criar usuário',
            ], 400);
        }
    }

    /**
     * Atualiza um usuário existente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user): JsonResponse
    {
        // Iniciar transação
        DB::beginTransaction();

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'password' => 'nullable|string|min:8|confirmed',
            ], [
                'name.required' => 'Campo nome é obrigatório',
                'email.required' => 'Campo email é obrigatório',
                'email.unique' => 'Email já cadastrado',
                'password.min' => 'Campo senha deve ter no mínimo 8 caracteres',
                'password.confirmed' => 'Campo senha não confere',
            ]);

            $user -> update($validated);

            return response()->json([
                'status' => 'Sucesso',
                'message' => 'Usuário atualizado com sucesso',
                'user' => $user,
            ], 200);

        } catch (Exception $e) {
            //Operação não concluida com exito
            DB::rollback();

            //Retorna uma mensagem de erro com status 400
            return response()->json([
                'status' => 'error',
                'message' => 'Erro ao atualizar usuário',
            ], 400);
        }
    }
}
