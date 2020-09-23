<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
class ProductController extends Controller
{
    function show(){
       $products = Product::all();
       return view('product.show', compact('products'));
    }

     
}
