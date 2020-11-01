<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function Product() {
        return $this->belongsTo('App\Product');
    }

}
