<?php

namespace CMS;

use CMS\Feature;
use Illuminate\Database\Eloquent\Model;

class ValueFeature extends Model
{
    protected $fillable = ['name'];

    public function feature(){
        return $this->belongsToMany(Feature::class);
    }

    //public function valueFAF(){
      //  return $this->hasMany('CMS\ValueFeatureAndFeature');
    //}
}
