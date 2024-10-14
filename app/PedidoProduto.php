<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    /**
     * @inheritDoc
     */
    protected $fillable = [
        'pedido_id',
        'produto_id'
    ];
}
