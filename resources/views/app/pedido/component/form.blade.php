<form 
    @if ($edit)
        action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}"
    @else
        action="{{ route('pedido.store') }}"
    @endif
    method="POST"
>
    @csrf
    @if ($edit)
        @method('PUT')
    @endif
    <select name="cliente_id">
        <option>-- Selecione um cliente --</option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <button type="submit" class="borda-preta">Salvar</button>
</form>