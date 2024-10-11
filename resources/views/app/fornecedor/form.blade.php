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
                {{ $msgSucesso }}
                <form action="{{ route('app.fornecedor.post') }}" method="POST">
                    @csrf
                    <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <br>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                    <br>
                    <input type="text" name="site" value="{{ old('site') }}" placeholder="Site" class="borda-preta">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}
                    <br>
                    <input type="text" name="uf" value="{{ old('uf') }}" placeholder="UF" class="borda-preta">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                    <br>
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
