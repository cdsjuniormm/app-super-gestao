@extends('app.base.section')
@section('titulo', 'Produto Detalhe - Cadastrar')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Produto Detalhe - Cadastrar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: auto;">
                @component('app.produto-detalhe.component.form', [
                    'edit' => $edit,
                    'unidades' => $unidades
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
