<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    const REGRAS = [
        'nome' => 'between:3,100',
        'descricao' => 'between:5,2000',
        'peso' => 'required',
        'unidade_id' => 'exists:unidades,id',
        'fornecedor_id' => 'exists:fornecedores,id'
    ];

    const MENSAGENS = [
        'nome.between' => 'Campo deve ter entre 3 e 100 caracteres.',
        'descricao.between' => 'Campo deve ter entre 5 e 2000 caracteres.',
        'peso.required' => 'Campo obrigatório.',
        'unidade_id.exists' => 'Unidade inválida.'
    ];

    /**
     * @inheritDoc
     */
    protected $fillable = [
        'nome',
        'descricao',
        'peso',
        'unidade_id',
        'fornecedor_id'
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
