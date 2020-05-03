<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
        'id',
        'names',
        'last_names',
        'email',
        'phone',
        'city',
        'address1',
        'address2'
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function cart(){
        return $this->hasOne('App\Cart');
    }
}
