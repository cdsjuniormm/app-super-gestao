@extends('app.base.section')
@section('titulo', 'Produto - Cadastrar')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h1>Produto - Cadastrar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin: auto;">
                <form action="{{ route('app.fornecedor.post') }}" method="POST">
                    @csrf
                    <input type="text" name="nome" value="" placeholder="Nome" class="borda-preta">
                    <br>
                    <input type="text" name="descricao" value="" placeholder="Descrição" class="borda-preta">
                    <br>
                    <input type="text" name="peso" value="" placeholder="Peso" class="borda-preta">
                    <br>
                    <select name="unidade_id">
                        <option value="1">-- Selecione a unidade de medida --</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
