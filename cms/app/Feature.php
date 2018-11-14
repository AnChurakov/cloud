<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['name'];
    
    public function valueFAF(){
        return $this->hasMany('CMS\ValueFeatureAndFeature');
    }
}
