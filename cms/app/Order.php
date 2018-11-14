<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('CMS\User');
    }    

   public function productOrder()
   {
       return $this->hasMany('CMS\ProductOrder');
   }
}
