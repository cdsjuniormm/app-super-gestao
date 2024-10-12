<form 
    @if ($edit)
        action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produtoDetalhe->id]) }}"
    @else
        action="{{ route('produto-detalhe.store') }}"
    @endif
    method="POST"
>
    @csrf
    @if ($edit)
        @method('PUT')
    @endif
    <input type="text" name="produto_id" value="{{ $produtoDetalhe->produto_id ?? old('produto_id') }}" placeholder="Produto" class="borda-preta">
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    <br>
    <input type="text" name="comprimento" value="{{ $produtoDetalhe->comprimento ?? old('comprimento') }}" placeholder="Comprimento" class="borda-preta">
    {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}
    <br>
    <input type="text" name="altura" value="{{ $produtoDetalhe->altura ?? old('altura') }}" placeholder="Altura" class="borda-preta">
    {{ $errors->has('altura') ? $errors->first('altura') : '' }}
    <br>
    <input type="text" name="largura" value="{{ $produtoDetalhe->largura ?? old('largura') }}" placeholder="Largura" class="borda-preta">
    {{ $errors->has('largura') ? $errors->first('largura') : '' }}
    <br>
    <select name="unidade_id">
        <option>-- Selecione a unidade de medida --</option>
        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}" {{ ($produtoDetalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>{{ $unidade->descricao }}</option>
        @endforeach
    </select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
    <br>
    <button type="submit" class="borda-preta">Salvar</button>
</form>