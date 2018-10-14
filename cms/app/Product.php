<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'price',
        'category_id',
        'subcategory_id',
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
}
