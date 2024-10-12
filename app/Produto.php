<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
     * @inheritDoc
     */
    protected $fillable = [
        'nome',
        'descricao',
        'peso',
        'unidade_id'
    ];
}
