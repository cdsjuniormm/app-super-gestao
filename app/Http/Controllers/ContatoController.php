<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('site.contato', [
            'motivo_contatos' => MotivoContato::all()
        ]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:50',
            'email' => 'email',
            'telefone' => 'required|min:8|max:20',
            'motivo' => 'required|in:1,2,3',
            'mensagem' => 'required|max:2000'
        ]);

        SiteContato::created($request->all());

        redirect('site.contato');
    }
}
