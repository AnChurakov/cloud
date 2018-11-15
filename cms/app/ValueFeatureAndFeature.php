<?php

namespace CMS;

use Illuminate\Database\Eloquent\Model;

class ValueFeatureAndFeature extends Model
{
    public function feature(){
        return $this->belongsTo('CMS\Feature');
    }

    public function valuefeature(){
        return $this->belongsTo('CMS\ValueFeature');
    }
}
