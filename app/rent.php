<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rent extends Model
{
    protected $fillable =[
        'checkIn',
        'checkOut',
        'total',
        'fk_idownership',
        'fk_idoccupant'
    ];

    public function ownership()
    {
        return $this->belongsTo(ownership::class,'fk_idownership','id');
    }

    public function occupant()
    {
        return $this->belongsTo(occupant::class,'fk_idoccupant','id');
    }
}
