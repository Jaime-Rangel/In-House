<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photoInfo extends Model
{
    protected $fillable =[
        'name',
        'description',
        'url',
        'fk_idownership'
    ];

    public function ownership()
    {
        return $this->belongsTo(ownership::class,'fk_idownership','id');
    }
}
