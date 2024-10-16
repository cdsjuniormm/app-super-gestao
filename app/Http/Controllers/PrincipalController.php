<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(Request $request)
    {
        return view('site.principal', [
            'motivo_contatos' => MotivoContato::all()
        ]);
    }
}
