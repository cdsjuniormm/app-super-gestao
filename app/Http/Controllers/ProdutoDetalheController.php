<?php

namespace App\Http\Controllers;

use App\ProdutoDetalhe;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new details product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.produto-detalhe.create', [
            'edit' => false,
            'unidades' => Unidade::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProdutoDetalhe::create($request->all());
        return redirect()->route('produto-detalhe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProdutoDetalhe  $produtoDetalhe
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutoDetalhe $produtoDetalhe)
    {
        //
    }

    /**
     * Show the form for editing the specified details product.
     *
     * @param  \App\ProdutoDetalhe  $produtoDetalhe
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoDetalhe $produtoDetalhe)
    {
        return view('app.produto-detalhe.edit', [
            'edit' => true,
            'unidades' => Unidade::all(),
            'produtoDetalhe' => $produtoDetalhe
        ]);
    }

    /**
     * Update the specified details product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProdutoDetalhe  $produtoDetalhe
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {
        $produtoDetalhe->update($request->all());
        return redirect()->route('produto-detalhe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProdutoDetalhe  $produtoDetalhe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoDetalhe $produtoDetalhe)
    {
        //
    }
}
