<?php

namespace App\Http\Controllers;
use App\FeatureImages;
use Illuminate\Http\Request;

class FeatureImagesController extends Controller
{
    //
    function read(){
        $post = FeatureImages::find(1)->post;
        return $post;
    }
}
