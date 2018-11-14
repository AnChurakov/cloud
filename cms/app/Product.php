<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'subcategory_id',
        'vendorcode'
    ];
    /**
     * Undocumented function
     *
     * @return void
     */
    public function category() {
        return $this->belongsTo('CMS\Category');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function subCategory() {
        return $this->belongsTo('CMS\SubCategory');
    }
<<<<<<< HEAD
    public function coupons() {
        return $this->hasMany('CMS\Coupon');
=======

    public function productOrder()
    {
        return $this->hasMany('CMS\ProductOrder');
>>>>>>> remotes/origin/anton
    }
}
