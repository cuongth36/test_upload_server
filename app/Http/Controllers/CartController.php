<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{
    function show(){
        return view('cart.show');
    }
    
    function add(Request $request, $id){
        $product = Product::find($id);
        Cart::add(['id' => $product->id,
         'name' => $product->name, 
         'qty' => 1, 
         'price' => $product->price, 
         'options' => ['thumbnail' => $product->thumbnail]
         ]);
       
        return redirect('cart/show');
    } 

    function remove($rowId){
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    function update(Request $request){
    
        $data = $request->post('qty');
       foreach($data as $k=>$v){
           Cart::update($k,$v);
       }
        return redirect('cart/show');
    }

    function destroy(){
        Cart::destroy();
        return redirect('cart/show');
    }
}
