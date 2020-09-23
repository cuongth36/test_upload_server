<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //
    function show(){
      $list_posts= array(
          1 => array(
            'title' => 'Tieu de bai viet 1'
          ),
          2 => array(
            'title' => 'Tieu de bai viet 2'
          ),
      );
      return view('admin.post.show', compact('list_posts'));
    }
    function update($id){
        return view('admin.post.update', compact('id'));
    }
    function delete($id){
        return "Xoa bai viet co id: $id";
    }
    function create(){
       return view('admin.post.create');
    }
}
