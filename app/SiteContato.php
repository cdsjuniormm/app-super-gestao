<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    /**
     * Valor referente a dúvida para o campo motivo.
     * 
     * @var int
     */
    const MOTIVO_DUVIDA = 1;

    /**
     * Valor referente a elogio para o campo motivo.
     * 
     * @var int
     */
    const MOTIVO_ELOGIO = 2;

    /**
     * Valor referente a reclamação para o campo motivo.
     * 
     * @var int
     */
    const MOTIVO_RECLAMACAO = 3;

    /**
     * Nome do motivo de acordo com sua flag.
     * 
     * @var array
     */
    const TEXTO_MOTIVO = [
        self::MOTIVO_DUVIDA => 'Dúvida',
        self::MOTIVO_ELOGIO => 'Elogio',
        self::MOTIVO_RECLAMACAO => 'Reclamação'
    ];
}
