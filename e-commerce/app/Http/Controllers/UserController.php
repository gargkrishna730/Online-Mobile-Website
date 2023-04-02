<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function checkout()
    {
        if (count(Auth::user()->cart)) {
            $cities = City::all();
            $states = State::all();
            $country = Country::all();
            //session()->put('checkout','')
            $data = compact('cities', 'states', 'country');
            return view('user.checkout')->with($data);
        }
        return redirect('cart');
    }
    // public function buynow(Request $request){

    //     try {
    //         $user = User::find(Auth::user()->id);
    //         $product = Product::find($request->product_id);
    //         $user->cart()->attach($product);
    //       } catch (\Exception $e) {
    //             $cart=Cart::where('user_id',Auth::user()->id)->where('product_id',$request->product_id)->first();
    //             $cart->quantity=$cart->quantity+1;
    //             $cart->save();
    //       }

    // }
}
