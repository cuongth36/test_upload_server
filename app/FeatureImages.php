<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureImages extends Model
{
    //
    function post(){
        return $this->belongsTo('App\Post');
    }
}
