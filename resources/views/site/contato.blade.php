@extends('site.base.section')
@section('titulo', 'Contato')
@section('conteudo')  
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.base.components.form-contato', ['class' => 'borda-preta'])
                    <p>A nossa equipe analisara a sua mensagem e retornaremos o mais breve possivel.</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent
            </div>
        </div>  
    </div>
@endsection
