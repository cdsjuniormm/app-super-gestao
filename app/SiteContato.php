<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    /**
     * @inheritDoc
     */
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato_id',
        'mensagem'
    ];
}
