<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use App\Produto;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(5);

        return view('app.produto.index', [
            'request' => $request->all(),
            'produtos' => $produtos
        ]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.produto.create', [
            'fornecedores' => Fornecedor::all(),
            'unidades' => Unidade::all(),
            'edit' => false
        ]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            Produto::REGRAS,
            Produto::MENSAGENS
        );

        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Produto  $produto
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('app.produto.show', [
            'produto' => $produto
        ]);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Produto  $produto
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('app.produto.edit', [
            'produto' => $produto,
            'fornecedores' => Fornecedor::all(),
            'unidades' => Unidade::all(),
            'edit' => true
        ]);
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate(
            Produto::REGRAS,
            Produto::MENSAGENS
        );

        $produto->update($request->all());

        return redirect()->route('produto.show', [
            'produto' => $produto->id
        ]);
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  \App\Produto  $produto
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produto.index');
    }
}
