<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = 'produto_detalhes';

    /**
     * @inheritDoc
     */
    protected $fillable = [
        'produto_id',
        'comprimento',
        'altura',
        'largura',
        'unidade_id'
    ];

    public function produto()
    {
        return $this->belongsTo('App\Item', 'produto_id', 'id');
    }
}
