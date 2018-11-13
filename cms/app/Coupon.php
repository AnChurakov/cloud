<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['name', 'procent', 'date', 'status'];
    //
}
