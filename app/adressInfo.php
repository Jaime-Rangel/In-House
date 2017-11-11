<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adressInfo extends Model
{
    protected $fillable = [
      'country',
        'state',
        'city',
        'street',
        'sm',
        'fk_idownership'
    ];

    public function adressInfo()
    {
        return $this->hasOne(ownership::class);
    }
}

