<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'id',
        'client_id',
        'date',
        'delivery_cost',
        'total'
    ];
    
    public function orderDetails(){
        return $this->hasMany('App\Order_Detail');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }

}
