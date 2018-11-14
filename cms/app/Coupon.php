<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'name',
        'procent',
        'date',
        'status',
        'category_id',
        'subcategory_id',
        'product_id',
    ];
    
    public function category() {
        return $this->belongsTo('CMS\Category');
    }
    public function subcategory() {
        return $this->belongsTo('CMS\SubCategory');
    }
    public function product() {
        return $this->belongsTo('CMS\Product');
    }
}
