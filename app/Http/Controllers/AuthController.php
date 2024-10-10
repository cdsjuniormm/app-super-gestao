<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index (Request $request)
    {
        return view('site.login.form', [
            'msgErro' => $request->get('msgErro')
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate(
            [
                'email' => 'email',
                'senha' => 'required'
            ],
            [
                'email' => 'Campo obrigatório.',
                'required' => 'Campo obrigatório.'
            ]
        );

        $user = User::where('email', $request->input('email'))
            ->where('password', $request->input('senha'))
            ->first();

        if (empty($user->id)) {
            return redirect()->route('site.login', [
                'msgErro' => 'Não foi possível acessar, tente novamente.'
            ]);
        };

        session_start();
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->name;

        return redirect()->route('app.clientes');
    }
}
