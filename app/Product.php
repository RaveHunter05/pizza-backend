<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image'
    ];

    public function orderDetails(){
        return $this->hasMany('App\Order_Detail');
    }

    public function carDetails(){
        return $this->hasMany('App\Cart_Detail');
    }
}
