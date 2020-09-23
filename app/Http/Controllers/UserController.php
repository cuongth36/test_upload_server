<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function read(){
      return  User::find(5)->posts;
    }

    function add(){
        User::create([
            'name' => 'cuong36th',
            'email' => 'cuong36th@gmail.com',
            'password' => bcrypt('cuong22051997')
        ]);
    }
}
