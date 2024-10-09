<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    /**
     * Tabela de referencia
     *
     * @var string
     */
    protected $table = 'fornecedores';

    /**
     * Campos permitidos com método create
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'site',
        'email',
        'uf'
    ];
}
