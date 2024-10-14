<form 
    @if ($edit)
        action="{{ route('produto.update', ['produto' => $produto->id]) }}"
    @else
        action="{{ route('produto.store') }}"
    @endif
    method="POST"
>
    @csrf
    @if ($edit)
        @method('PUT')
    @endif
    <select name="fornecedor_id">
        <option>-- Selecione um fornecedor --</option>
        @foreach ($fornecedores as $fornecedor)
            <option value="{{ $fornecedor->id }}" {{ ($produto->fornecedor_id ?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : '' }}>{{ $fornecedor->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : '' }}
    <br>
    <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição" class="borda-preta">
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <br>
    <input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso" class="borda-preta">
    {{ $errors->has('peso') ? $errors->first('peso') : '' }}
    <br>
    <select name="unidade_id">
        <option>-- Selecione a unidade de medida --</option>
        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}" {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
        @endforeach
    </select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
    <br>
    <button type="submit" class="borda-preta">Salvar</button>
</form>