<h3>Fornecedores</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $fornecedor)
        Nome: {{ $fornecedor['nome'] ?? '' }} <br>
        Email: {{ $fornecedor['email'] ?? '' }} <br>
        DDD: {{ $fornecedor['ddd'] ?? '' }} <br>
        Telefone: {{ $fornecedor['telefone'] ?? '' }} <hr>
        @if ($loop->last)
            Total: {{ $loop->count }}
        @endif
    @empty
        Nenhum fornecedor cadastrado.
    @endforelse
@endisset