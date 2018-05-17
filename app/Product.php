<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['trade_name','generic_name','therapeutic_class','indication','dosage_administration','preparation','prescribing_file'];


    public function med_images()
    {
        return $this->hasmany('App\Med_image');
    }
}
