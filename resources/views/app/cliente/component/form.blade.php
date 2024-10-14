<form 
    @if ($edit)
        action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}"
    @else
        action="{{ route('cliente.store') }}"
    @endif
    method="POST"
>
    @csrf
    @if ($edit)
        @method('PUT')
    @endif
    <input type="text" name="nome" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <button type="submit" class="borda-preta">Salvar</button>
</form>