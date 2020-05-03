<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable =[
        'id',
        'client_id'
    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function carDetails(){
        return $this->hasMany('App\Cart');
    }
}
