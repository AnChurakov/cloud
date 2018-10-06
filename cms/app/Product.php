<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('CMS\Category');
    }
}
