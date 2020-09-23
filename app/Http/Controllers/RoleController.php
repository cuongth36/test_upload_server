<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
class RoleController extends Controller
{
    //
    function show(){
       // lay tat ca thong tin user co role id =2
       return Role::find(2)->users;
       // lay thong tin role cua 1 user
    //    return User::find(3)->roles;
    }
}
