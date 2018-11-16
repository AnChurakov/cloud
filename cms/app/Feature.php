<?php

namespace CMS;

use CMS\ValueFeature;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['name'];

    public function valuefeature() {
        return $this->belongsToMany(ValueFeature::class);
    }
    
   // public function valueFAF(){
      //  return $this->hasMany('CMS\ValueFeatureAndFeature');
    //}
}
