<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    const REGRAS = [
        'nome' => 'required|min:3|max:255'
    ];

    const MENSAGENS = [
        'nome.required' => 'Campo obrigatório.',
        'nome.min' => 'Campo deve ter no mínimo 3 caracteres.',
        'nome.max' => 'Campo deve ter no máximo 255 caracteres.'
    ];

    /**
     * @inheritDoc
     */
    protected $fillable = [
        'nome'
    ];
}
