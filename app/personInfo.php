<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personInfo extends Model
{
    protected $fillable=[
      'name',
      'lastNameF',
      'lastNameM',
      'email',
      'phone',
        'fk_idownership'
    ];
}
