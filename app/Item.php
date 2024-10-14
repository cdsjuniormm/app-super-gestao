<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Exemplo de model com nome diferente da tabela.
 * 
 * Para ajustar rotas que tenham o nome da tabela `produtos`,
 * as actions que recebem `App\Produtos` devem passar a receber $id.
 */
class Item extends Model
{
    protected $table = 'produtos';

    /**
     * @inheritDoc
     */
    protected $fillable = [
        'nome',
        'descricao',
        'peso',
        'unidade_id'
    ];

    /**
     * Por padrão utiliza modo Lazy Loading(traz os dados ao chamar o método).
     * Para trazer os dados no momento da consulta, utilizar o modo Eager Loading.
     * Exemplo: `Item::with(['produtoDetalhe'])->all()`
     *
     * @return void
     */
    public function produtoDetalhe()
    {
        return $this->hasOne('App\ItemDetalhe', 'produto_id', 'id');
    }
}
