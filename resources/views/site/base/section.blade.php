<!DOCTYPE html>
<html lang="pt-br">
    @extends('site.base.head')
    <body>
        @include('site.base.partial.topo')
        @yield('conteudo')
        @include('site.base.partial.footer')
    </body>
</html>
