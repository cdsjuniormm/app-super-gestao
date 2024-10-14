@extends('app.base.section')
@section('titulo', 'Pedido - Cadastrar')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Pedido - Cadastrar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: auto;">
                @component('app.pedido.component.form', [
                    'edit' => $edit,
                    'clientes' => $clientes
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
