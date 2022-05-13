<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // route-> localhost:8000/api/criar-usuario
    public function store(StoreUserRequest $request)
    {
        $user = User::where('username', $request->username)->whereOr('email', $request->email)->first();

        if ($user) {
            return response()->json([
                'created' => 'false',
                'message' => 'usuário já existe',
            ]);
        }

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->email_hash_md5 = md5($request->email);
        $user->password = Hash::make($request->password);
        $user->save();


        /**
         * falta enviar o email
         */

        return $user ? response()->json([
            'created' => 'true',
            'message' => 'usuário criado com sucesso',
        ]) : response()->json([
            'created' => 'false',
            'message' => 'falha ao criar usuário',
        ]);
    }

    // route-> localhost:8000/api/logar
    public function login(LoginRequest $request)
    {
        $user = User::where('username', $request->username)->get();

        if (!$user || !Auth::attemp(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['login' => 'false', 'message' => 'Usuário e/ou senha não conferem']);
        }

        return response()->json(['login' => 'false', 'message' => 'Usuário autenticado']);
    }

    public function userDataResponse(Request $request, $email_hash_md5)
    {
        $user = User::select(['name', 'username', 'email'])->where('email_hash', $email_hash_md5);

        if (!$user) {
            return  response()->json([
                'user_data_status' => false,
                'message' => 'Usuário não encontrado'
            ]);
        }

        return  response()->json([
            'user_data_status' => true,
            'message' => 'Usuário encontrado com sucesso',
            'user' => $user
        ]);
    }
}
