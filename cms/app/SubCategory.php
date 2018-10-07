<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name', 'category_id', 'desc'];

    public function category()
    {
        return $this->belongsTo('CMS\Category');
    }
}
