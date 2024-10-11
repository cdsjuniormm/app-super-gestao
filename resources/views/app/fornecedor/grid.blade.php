@extends('app.base.section')
@section('titulo', 'Fornecedor')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Fornecedor - Lista</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.form') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 70%; margin: auto;">
                <table border="1" width="100%">
                    <thead>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>Editar</th>
                        <th>Excluír</th>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td><a href="{{ route('app.fornecedor.form', $fornecedor->id) }}">Editar</a></td>
                                <td><a href="">Excluír</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $fornecedores->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
