<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibits extends Model
{
    protected $fillable = [
        'place', 'price', 'description','file','type','user_id','date','count'
    ];
}
