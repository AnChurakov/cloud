<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
   public function order()
   {
       return $this->belongsTo('CMS\Order');
   }

   public function product()
   {
       return $this->belongsTo('CMS\Product');
   }
}
