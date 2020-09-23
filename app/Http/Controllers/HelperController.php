<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HelperController extends Controller
{
    //
    function url(){
        //Tao url co ban
        // $url = url('test');

        //Tao url qua route
        // $url = route('post.show');

        //Tao url qua action
        // $url = action('PostController@store');

        // Lay url hien tai
        $url = url()->current();
        echo $url;
    }

    function string(){
        //Lay do dai chuoi
        // $str1= 'Cuongdeptrai';
        // echo  Str::length($str1);

        //in hoa, in thuong chuoi
        // $str = 'Cuongdeptrai';
        // echo Str::lower($str);
        // echo Str::upper($str);

        //tao chuoi ngau nhien
        // echo Str::random(20);

        // Loai bo ky tu du thua 
        // $str = Str::of('   Cuong    dep trai   ')->trim();
        // echo $str;

        // Lay chuoi con
        // $str = 'Laravel Pro';
        //lay chuoi pro trong $str;
        // echo Str::of($str)->substr(8);

        // Lay chuoi laravel trong $str
            // echo Str::of($str)->substr(0,7);

        // Tao slug-> link than thien

        // $str = Str::slug('Học web đi làm','-');
        $slug = Str::of('Laravel Framework')->slug('-');
        echo $slug;

        //Noi chuoi con tu mot chuoi cho trc
        // echo Str::of('Thieu Tho ')->append('Cuong');

        //Tim kiem va thay the chuoi
        // $str = 'Laravel 7x';
        // echo Str::of($str)->replace('7x','6x');

        // Cat chuoi voi so ky tu cho trc
        // $str = 'Nhận định bóng đá MU - West Ham: "Quỷ đỏ" rửa hận, vượt Chelsea vào top 3';
        // echo Str::of($str)->limit(40);

        //Kiem tra chuoi da cho co chua chuoi con hay k

        // $str= 'Cuong dep trai';
        // echo Str::of($str)->contains('Cuong');
        // echo Str::contains($str,'Cuong');
    }
}
