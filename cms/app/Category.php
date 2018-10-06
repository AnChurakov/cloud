<?php

namespace CMS;

use CMS\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany('CMS\Product');
    }
}
