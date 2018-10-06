<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [];
    public function category()
    {
        return $this->belongsTo('CMS\Category');
    }
}
