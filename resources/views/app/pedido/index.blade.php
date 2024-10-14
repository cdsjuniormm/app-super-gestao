@extends('app.base.section')
@section('titulo', 'Pedidos')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Pedidos</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a href="{{ route('pedido.create') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 70%; margin: auto;">
                <table border="1" width="100%">
                    <thead>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluír</th>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->id }}</td>
                                <td>{{ $pedido->cliente->nome }}</td>
                                <td><a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Exibir</a></td>
                                <td><a href="{{ route('pedido.edit', ['pedido' => $pedido->id]) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}" id="destroy_{{ $pedido->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="document.getElementById('destroy_{{ $pedido->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>
                    Exibindo {{ $pedidos->count() }} de {{ $pedidos->total() }} (de {{ $pedidos->firstItem() }} até {{ $pedidos->lastItem() }}).
                </p>
                {{ $pedidos->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
