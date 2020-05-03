<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Detail extends Model
{
    protected $fillable=[
        'id',
        'cart_id',
        'product_id',
        'date',
        'quantity',
        'active'
    ];

    public function cart(){
        return $this->belongsTo('Cart');
    }

    public function product(){
        return $this->belongsTo('Product');
    }
}
