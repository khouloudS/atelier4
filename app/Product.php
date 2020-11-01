<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public function Product() {
        return $this->belongsTo('App\Product');
    }
    public function Category() {
        return $this->belongsTo('App\Category');
    }
}
