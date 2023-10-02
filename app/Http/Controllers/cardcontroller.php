<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Cart;

class cardcontroller extends Controller
{
    public function add_to_cart(request $request){
        $quantity=$request->quantity;
        $id=$request->id;

        $products=product::where('id',$id)->first();
        $data['quantity']=$quantity;
        $data['id']=$products->id;
        $data['name']=$products->name;
        $data['price']=$products->price;
        $data['attribute']=[$products->image];

        Cart::add($data);
        cardArray();
        return redirect()->back();
    }

    public function delete($id){
      cart::remove($id);
      return redirect()->back();

    }
}
