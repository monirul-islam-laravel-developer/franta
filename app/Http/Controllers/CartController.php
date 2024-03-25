<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $contest;
    public function index()
    {
        return view('front.cart.index');
    }
    public function cartAdd(Request $request,$id)
    {
        $this->contest=Contest::find($id);
        Cart::add([
            'id' =>$this->contest->id ,
            'name' =>$this->contest->title,
            'price' => $this->contest->price,
            'quantity' =>$request->qty,
            'attributes' =>[
                'image'=>$this->contest->image
            ]
        ]);
        return redirect('/cart-page');
    }
    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value'    => $request->qty
            ]
        ]);
        return redirect()->back()->with('message', 'Cart Item Update Successfully');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return redirect()->back()->with('message', 'Cart Item Remove Successfully');
    }
}
