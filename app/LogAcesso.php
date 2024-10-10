<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogAcesso extends Model
{
    /**
     * @inheritDoc
     */
    protected $fillable = [
        'ip',
        'uri'
    ];
}
