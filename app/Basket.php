<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = [
    	'product_id', 'description', 'status', 'user_id', 'address', 'phone'
    ];
}
