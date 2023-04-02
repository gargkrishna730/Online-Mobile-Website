<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $user = User::find(Auth::user()->id);
        // $product = Product::find($request->product_id);
        // $user->cart()->attach($product);
        $product = Product::find($request->product_id);
        try {
            $user = User::find(Auth::user()->id);
            $user->cart()->attach($product);
        } catch (\Exception $e) {
            $cart = Cart::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->first();
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
        }
        if ($request->function == 'cart') {
            return redirect('cart');
        }else{
            session()->flash('buynow',$product);
            return redirect('checkout');
        }
        //dd(Cart::class);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //dd($cart);
        $cart->quantity = $request->quantity;
        $cart->save();
        $subtotal = 0;
        $count_price = ($cart->product->price) * ($cart->quantity);
        foreach (Auth::user()->cart as $value) {
            $subtotal += $value->pivot->quantity * $value->price;
        }
        return response()->json([$count_price, $subtotal, Auth::user()->cart->sum('pivot.quantity')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //dd($cart);
        $cart->delete();
        session()->flash('message', 'Successfully deleted the shark!');
        return redirect('cart');
    }
}
