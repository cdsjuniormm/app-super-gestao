@extends('app.base.section')
@section('titulo', 'Cliente - Editar')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Cliente - Editar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: auto;">
                @component('app.cliente.component.form', [
                    'edit' => $edit,
                    'cliente' => $cliente
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
