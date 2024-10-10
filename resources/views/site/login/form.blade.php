@extends('site.base.section')
@section('titulo', 'Login')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal" style="width: 30%; margin: auto;">
                <form action="{{ route('auth.authenticate') }}" method="POST">
                    @csrf
                    <input name="email" type="email" placeholder="Login" class="borda-preta" value="{{ old('email') }}">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}
                    <br>
                    <input name="senha" type="password" placeholder="Senha" class="borda-preta" value="{{ old('senha') }}">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>  
    </div>
@endsection
