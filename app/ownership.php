<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ownership extends Model
{
    protected $fillable =[
        'description',
        'salePrice',
        'rentPrice',
        'fk_idowner'
    ];

    public function owner()
    {
        return $this->belongsToMany(owner::class);
    }
}
