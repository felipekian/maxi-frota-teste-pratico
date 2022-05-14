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
    public function index()
    {
        return view('site.create');
    }

    public function store(StoreUserRequest $request)
    {
        return User::create($request->all()) ? redirect()->route('site.auth.index')->with([
            'alerta' => 'success',
            'mensagem' => 'user create',
        ]) : back()->with([
            'alerta' => 'danger',
            'mensagem' => 'user not create',
        ]);
    }

}
