<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Med_image extends Model
{
    protected $fillable=['product_id','image'];

    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}
