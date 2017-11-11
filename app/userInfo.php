<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userInfo extends Authenticatable
{
    protected $fillable=[
      'user',
      'password',
        'fk_iduserInfo',
        'verification_token'
    ];

    protected $hidden =[
      'password',
        'verification_token'
    ];
}
