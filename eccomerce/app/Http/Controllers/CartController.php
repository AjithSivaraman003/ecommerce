<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Casual;

class CartController extends Controller
{
    

public function store(Request $request)
{
    $product = Casual::findOrFail($request->product_id);

    Cart::create([

        'product_id' => $product->id,

        'quantity' => $request->quantity,

        'total' => $product->price * $request->quantity

    ]);

    return redirect('/cart');
}

}
