@extends('app.base.section')
@section('titulo', 'Clientes')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Clientes</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo</a></li>
                <li><a href="{{ route('cliente.create') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 70%; margin: auto;">
                <table border="1" width="100%">
                    <thead>
                        <th>Nome</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluír</th>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td><a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Exibir</a></td>
                                <td><a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}" id="destroy_{{ $cliente->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="document.getElementById('destroy_{{ $cliente->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>
                    Exibindo {{ $clientes->count() }} de {{ $clientes->total() }} (de {{ $clientes->firstItem() }} até {{ $clientes->lastItem() }}).
                </p>
                {{ $clientes->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
