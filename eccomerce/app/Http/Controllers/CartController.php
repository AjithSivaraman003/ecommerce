<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Casual;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public function store(Request $request)
    // {
    //     $product = Casual::find($request->product_id);

    //     Cart::create([

    //         'product_id' => $product->id,

    //         'user_id' => Auth::id(),

    //         'quantity' => $request->quantity,

    //         'total' => $product->price * $request->quantity

    //     ]);

    //     return redirect('/cart');
    // }

    // public function index()
    // {
    //     $carts = Cart::join('casuals',
    //                 'carts.product_id',
    //                 '=',
    //                 'casuals.id')

    //                 ->select(
    //                     'carts.*',
    //                     'casuals.image',
    //                     'casuals.title',
    //                     'casuals.description',
    //                     'casuals.price',
    //                     'casuals.size'
    //                 )

    //                 ->where('carts.user_id', Auth::id())

    //                 ->get();

    //     return view('cart', compact('carts'));
    // } 

    public function store(Request $request)
{
    $product = Casual::find($request->product_id);

    $cart = Cart::where('product_id', $request->product_id)
                ->where('user_id', Auth::id())
                ->first();

    // SAME PRODUCT
    if($cart)
    {
        $cart->quantity += $request->quantity;

        $cart->total =
            $cart->quantity * $product->price;

        $cart->save();
    }

    // NEW PRODUCT
    else
    {
        Cart::create([

            'product_id' => $product->id,

            'user_id' => Auth::id(),

            'quantity' => $request->quantity,

            'total' =>
                $product->price * $request->quantity

        ]);
    }

    return redirect('/cart');
}


public function index()
{
    $carts = Cart::join(
                'casuals',
                'carts.product_id',
                '=',
                'casuals.id'
            )

            ->select(
                'carts.*',
                'casuals.image',
                'casuals.title',
                'casuals.description',
                'casuals.price',
                'casuals.size'
            )

            ->where('carts.user_id', Auth::id())

            ->get();

    // TOTAL BILL
    $grandTotal = $carts->sum('total');

    return view('cart',
        compact('carts', 'grandTotal'));
}

public function delete($id)
{
    Cart::find($id)->delete();

    return redirect()->back();
}

}