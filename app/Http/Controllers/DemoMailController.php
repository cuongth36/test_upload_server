<?php

namespace App\Http\Controllers;

use App\Mail\Demomail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoMailController extends Controller
{
    //
    function sendmail(){
        $data = [
            'key1' => 'Dữ liệu được vào là dữ liệu động'
        ];
        Mail::to('thocuong97@gmail.com')->send(new Demomail($data));
    }
}
