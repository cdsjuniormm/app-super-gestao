<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Form de pesquisa de fornecedores.
     *
     * @return View
     */
    public function index(): View
    {
        return view('app.fornecedor.index');
    }

    /**
     * Lista fornecedores filtrados.
     *
     * @param Request $request
     *
     * @return View
     */
    public function grid(Request $request): View
    {
        $fornecedores = Fornecedor::where('nome', 'like', "%{$request->input('nome')}%")
            ->where('email', 'like', "%{$request->input('email')}%")
            ->where('site', 'like', "%{$request->input('site')}%")
            ->where('uf', 'like', "%{$request->input('uf')}%")
            ->get();

        return view('app.fornecedor.grid', [
            'fornecedores' => $fornecedores
        ]);
    }

    /**
     * Formulário de fornecedores.
     *
     * @param mixed $id
     * @param mixed $msgSucesso
     *
     * @return View
     */
    public function form(
        $id = null,
        $msgSucesso = null
    ): View {
        $fornecedor = null;

        if ($id) {
            $fornecedor = Fornecedor::find($id);
        }

        return view('app.fornecedor.form', [
            'fornecedor' => $fornecedor,
            'update' => isset($fornecedor->id),
            'msgSucesso' => $msgSucesso
        ]);
    }

    /**
     * Cadastra e edita fornecedores.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function post(Request $request): RedirectResponse
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

        $id = $request->input('id');
        $fornecedor = Fornecedor::class;

        if ($id) {
            $fornecedor::find($id)->update($request->all());

            return redirect()->route('app.fornecedor.form', [
                'id' => $id,
                'msgSucesso' => 'Fornecedor editado com sucesso.'
            ]);
        }

        $fornecedor::create($request->all());

        return redirect()->route('app.fornecedor.form', [
            'id' => '0',
            'msgSucesso' => 'Fornecedor cadastrado com sucesso.'
        ]);
    }
}
