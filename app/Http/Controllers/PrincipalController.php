<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index(Request $request)
    {
        return view('site.principal', [
            'motivo_contatos' => SiteContato::TEXTO_MOTIVO
        ]);
    }
}
