<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Mail\SendEmailConfirmation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        return view('site.create');
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create_custom($request->all());

        if ($user) {

            Mail::to($user->email)->queue(new SendEmailConfirmation($user));

            return  redirect()->route('site.auth.index')->with([
                'alerta' => 'success',
                'mensagem' => 'user create',
            ]);
        }

        return back()->with([
            'alerta' => 'danger',
            'mensagem' => 'user not create',
        ]);
    }

    public function validarEmail(Request $request, $email_hash_md5)
    {
        $user = User::where(['email_hash_md5' => $email_hash_md5])->first();

        if(!$user){
            return redirect()->route('site.auth.index')->with([
                'alert' => 'danger',
                'message' => 'User not found'
            ]);
        }

        // check email validate user
        $user->email_verified_at = Carbon::now();
        $user->save();

        return view('site.userShow',[
            'user' => $user
        ])->with([
            'alert' => 'success',
            'message' => 'Email successfully validated',
        ]);
    }
}
