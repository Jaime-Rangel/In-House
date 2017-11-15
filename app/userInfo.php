<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInfo extends Model
{
    protected $fillable =[
        'user',
        'password',
        'fk_idpersonInfo'
    ];

    public function personInfo()
    {
        return $this->belongsTo(personInfo::class);
    }
}
