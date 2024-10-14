<p>Pedido ID: {{ $pedido->id }}</p>
<p>Cliente: {{ $pedido->cliente->nome }}</p>
<p>
    Produtos: <br>
    @forelse ($pedido->produtos as $produto)
        {{ $produto->nome }} <br>
    @empty
        Ainda não há produtos cadastrados.
    @endforelse
</p>
<form action="{{ route('pedido-produto.store') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
    <select name="produto_id">
        <option>-- Selecione um produto --</option>
        @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}" {{ ($pedido->produto_id ?? old('produto_id')) == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    <br>
    <button type="submit" class="borda-preta">Adicionar</button>
</form>