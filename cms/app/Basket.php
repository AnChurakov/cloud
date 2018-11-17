<?php

namespace CMS;

use CMS\Product;
use CMS\User;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
