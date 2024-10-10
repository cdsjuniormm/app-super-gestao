{{ $slot }}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $class }}" value="{{ old('nome') }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $class }}" value="{{ old('telefone') }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $class }}" value="{{ old('email') }}">
    <br>
    <select name="motivo_contato_id" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contato_id') == $motivo->id ? 'selected' : '' }}>{{ $motivo->nome }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $class }}">{{ old('mensagem') ?? 'Preencha aqui a sua mensagem'}}</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>

@if(count($errors))
    <div style="position: absolute; top: 0px; left: 0px; background-color: red; width: 100%;">
        <pre>
            {{ print_r($errors) }}
        </pre>
    </div>
@endif
