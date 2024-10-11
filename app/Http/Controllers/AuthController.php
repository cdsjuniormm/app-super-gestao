<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Exibe formulário de login.
     *
     * @param string|null $msgErro
     *
     * @return View
     */
    public function index($msgErro = null)
    {
        return view('site.login.form', [
            'msgErro' => $msgErro
        ]);
    }

    /**
     * Realiza autenticação do usuário.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
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

        return redirect()->route('app.home');
    }

    /**
     * Realiza o logout do usuário.
     *
     * @return RedirectResponse
     */
    public function deauthenticate()
    {
        session_destroy();
        return redirect()->route('site.index');
    }
}
