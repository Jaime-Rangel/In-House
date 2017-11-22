<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    protected $fillable =[
        'fk_iduserInfo'
    ];

    public function userInfo()
    {
        return $this->belongsTo(userInfo::class,'fk_iduserInfo','id');
    }
}
