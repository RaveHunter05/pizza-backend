<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $fillable=[
        'id',
        'order_id',
        'product_id',
        'quantity',
        'subtotal'
    ];

    public function order(){
        return $this->belongsTo('App\Order');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
