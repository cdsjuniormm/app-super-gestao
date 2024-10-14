<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /**
     * @inheritDoc
     */
    protected $fillable = [
        'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function produtos()
    {
        return $this->belongsToMany('App\Produto', 'pedido_produtos');
    }
}
