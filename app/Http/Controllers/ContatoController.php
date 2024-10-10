<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato', [
            'motivo_contatos' => MotivoContato::all()
        ]);
    }

    public function post(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|min:3|max:50',
                'email' => 'email',
                'telefone' => 'required|min:8|max:20',
                'motivo_contato_id' => 'required|in:1,2,3',
                'mensagem' => 'required|max:2000'
            ],
            [
                'required' => 'Campo :attribute obrigatório.',
                'email' => 'E-mail inválido.',
                'telefone.min' => 'Telefone inválido.',
                'telefone.max' => 'Telefone inválido.',
                'motivo_contato_id.in' => 'Motivo inválido.',
                'mensagem.max' => 'O tamanho máximo para este campo é de 2000 caracteres.'
            ]
        );

        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
