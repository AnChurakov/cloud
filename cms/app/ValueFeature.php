<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class ValueFeature extends Model
{
    public function valueFAF(){
        return $this->hasMany('CMS\ValueFeatureAndFeature');
    }
}
