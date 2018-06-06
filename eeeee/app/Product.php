<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['exhibit_id','user_id', 'price', 'isAccept', 'isBuyerAccept'];
}
