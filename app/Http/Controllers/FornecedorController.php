<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function grid()
    {
        return view('app.fornecedor.grid');
    }

    public function form($msgSucesso = null)
    {
        return view('app.fornecedor.form', [
            'msgSucesso' => $msgSucesso
        ]);
    }

    public function post(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|min:3|max:50',
                'email' => 'email',
                'site' => 'required|min:10|max:255',
                'uf' => 'required||min:2|max:2'
            ],
            [
                'required' => 'Campo :attribute obrigatório.',
                'email' => 'Email inválido.',
                'site.min' => 'Campo deve ter no mínimo 10 caracteres.',
                'site.max' => 'Campo deve ter no máximo 255 caracteres.',
                'uf.min' => 'Campo deve ter 2 caracteres.',
                'uf.max' => 'Campo deve ter 2 caracteres.'
            ]
        );

        Fornecedor::create($request->all());

        return redirect()->route('app.fornecedor.form', [
            'msgSucesso' => 'Fornecedor cadastrado com sucesso.'
        ]);
    }
}
