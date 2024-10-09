<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato', [
            'motivo_contatos' => SiteContato::TEXTO_MOTIVO
        ]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'email' => 'required|min:8|max:80',
            'telefone' => 'required|min:8|max:20',
            'motivo' => 'required|in:1,2,3',
            'mensagem' => 'required|max:2000'
        ]);

        SiteContato::created($request->all());

        redirect('site.contato');
    }
}
