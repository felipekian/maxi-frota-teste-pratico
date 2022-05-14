<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutenticationController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return redirect()->route('site.dashboard.index')->with([
                'alerta' => 'success',
                'mensagem' => 'successfully logged in',
            ]);
        }

        return back()->with([
            'alerta' => 'danger',
            'mensagem' => 'email or password do not match',
        ])->withInput();
    }
}
