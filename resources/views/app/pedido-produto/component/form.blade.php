<h2>Detalhes do pedido</h2>
<p>Pedido ID: {{ $pedido->id }}</p>
<p>Cliente: {{ $pedido->cliente->nome }}</p>
<h2>Produtos</h2>
<table border="1" style="margin: auto">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Cadastro</th>
    </thead>
    <tbody>
        @forelse ($pedido->produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->pivot->created_at->format('d/m/Y') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">
                    Ainda não há produtos cadastrados.
                </td>
            </tr>
        @endforelse
        
    </tbody>
</table>
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
    <input type="number" name="quantidade" value="{{ old('quantidade') }}">
    {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}
    <br>
    <button type="submit" class="borda-preta">Adicionar</button>
</form>