{{ $slot }}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $class }}" value="{{ old('nome') }}">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $class }}" value="{{ old('telefone') }}">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $class }}" value="{{ old('email') }}">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <select name="motivo_contato_id" class="{{ $class }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contato_id') == $motivo->id ? 'selected' : '' }}>{{ $motivo->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <textarea name="mensagem" class="{{ $class }}">{{ old('mensagem') ?? 'Preencha aqui a sua mensagem'}}</textarea>
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>

