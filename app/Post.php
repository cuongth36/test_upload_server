<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes ;
    protected $fillable = ['title', 'description', 'content', 'user_id','thumbnail'];

    function FeatureImage(){
        return $this->hasOne('App\FeatureImages');
    }

    function user(){
        return $this->belongsTo('App\User');
    }

}
