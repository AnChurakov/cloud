<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'description'
    ];

    public function category() {
        return $this->belongsTo('CMS\Category');
    }
    public function coupons() {
        return $this->hasMany('CMS\Coupon');
    }
}
