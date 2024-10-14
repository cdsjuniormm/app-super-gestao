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

    public function produtoDetalhe()
    {
        return $this->hasOne('App\ProdutoDetalhe');
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor', 'fornecedor_id', 'id');
    }
}
