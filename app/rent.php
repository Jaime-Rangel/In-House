<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rent extends Model
{
    protected $fillable=[
      'checkIn',
      'checkOut',
      'total',
        'fk_idownership',
        'fk_idoccupant'
    ];

    public function occupant()
    {
        return $this->hasOne(occupant::class);
    }

    public function ownership()
    {
        return $this->hasMany(ownership::class);
    }
}
