@extends('app.base.section')
@section('titulo', 'Produto - Cadastrar')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Produto - Cadastrar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: auto;">
                @component('app.produto.component.form', [
                    'edit' => $edit,
                    'unidades' => $unidades
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
