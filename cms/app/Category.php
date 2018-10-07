<?php

namespace CMS;

use CMS\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany('CMS\Product');
    }

    public function subcategories()
    {
        return $this->hasMany('CMS\SubCategory');
    }
}
