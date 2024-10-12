@extends('app.base.section')
@section('titulo', 'Produtos')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Produtos</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="{{ route('produto.create') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 70%; margin: auto;">
                <table border="1" width="100%">
                    <thead>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Altura</th>
                        <th>Largura</th>
                        <th>Comprimento</th>
                        <th>Unidade</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluír</th>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->produtoDetalhe->altura ?? '' }}</td>
                                <td>{{ $produto->produtoDetalhe->largura ?? '' }}</td>
                                <td>{{ $produto->produtoDetalhe->comprimento ?? '' }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Exibir</a></td>
                                <td><a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a></td>
                                <td>
                                    <form action="{{ route('produto.destroy', ['produto' => $produto->id]) }}" id="destroy_{{ $produto->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="document.getElementById('destroy_{{ $produto->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>
                    Exibindo {{ $produtos->count() }} de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} até {{ $produtos->lastItem() }}).
                </p>
                {{ $produtos->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
