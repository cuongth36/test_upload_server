<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request){
        // $request->session()->put('username','Tho Cuong');
        // $request->session()->put('login', true);

        //helper session
        session(['username' => 'cuong']);
    }

    function show(Request $request){
        // return $request->session()->all();
        //kiem tra ton tai cua session
        // if($request->session()->has('username')){
        //     echo 'Da luu thong tin session'.'<br>';
        //     return $request->session()->get('username');
        // }

        // return $request->session()->get('status');

        //Helper session
       echo session('username');
       
    }
    function add_flash(Request $request){
        return  $request->session()->flash('status','Ban da them san pham thanh cong');
    }

    function delete(Request $request){
        // $request->session()->forget('username');

        // Xoa toan bo session 
        $request->session()->flush();
    }
}
