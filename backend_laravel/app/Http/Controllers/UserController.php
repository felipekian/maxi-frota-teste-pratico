<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // route-> localhost:8000/api/logar
    public function logar()
    {
        return response()->json([
            'name' => 'Felipe',
            'state' => 'Roraima'
        ]);
    }
}
