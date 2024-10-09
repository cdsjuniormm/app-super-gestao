<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;

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
