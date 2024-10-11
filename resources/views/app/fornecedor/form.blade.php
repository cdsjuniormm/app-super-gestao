@extends('app.base.section')
@section('titulo', 'Fornecedor')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Fornecedor - Cadastrar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.form') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: auto;">
                <form action="" method="POST">
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="email" name="email" placeholder="Email" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
