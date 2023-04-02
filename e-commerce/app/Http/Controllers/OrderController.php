<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\Delivery;
use App\Models\DeliveryAddress;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\OrderDetails;
use App\Models\UserAddress;
use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.orders');
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
        //dd(session()->has('buynow'));
        $order = new Order();
        $order->total = $request->total;
        $order->user_id = Auth::user()->id;
        $order->save();
        $shipping = new Shipping();
        $shipping->status = 'C';
        $shipping->name = 'Confirmed';
        $shipping->slug = 'confirmed';
        $shipping->order_id = $order->id;
        $shipping->user_id = Auth::user()->id;
        $shipping->save();
        $delivery = new Delivery();
        $delivery->status = 'ND';
        $delivery->name = 'Not Delivered';
        $delivery->slug = 'not-delivered';
        $delivery->order_id = $order->id;
        $delivery->user_id = Auth::user()->id;
        $delivery->save();
        $payment = new Payment();
        $payment->status = 'PENDING';
        $payment->method = $request->paymentMethod;
        $payment->method_slug = Str::slug($request->paymentMethod);
        $payment->method_name = 'Cash On Delivery';
        $payment->total = $request->total;
        //$payment->date = $request->date;
        $payment->order_id = $order->id;
        $payment->user_id = Auth::user()->id;
        $payment->save();
        $invoice = new Invoice();
        $invoice->method = $request->paymentMethod;
        $invoice->total = $request->total;
        $invoice->payment_id = $payment->id;
        $invoice->order_id = $order->id;
        $invoice->user_id = Auth::user()->id;
        $invoice->save();
        if (session()->has('buynow')) {
            $value = session()->get('buynow');
            $order_detail = new OrderDetails();
            $order_detail->product_id = $value->id;
            $order_detail->pname = $value->name;
            $order_detail->price = $value->price;
            $order_detail->quantity = 1;
            $order_detail->product_total = ($value->price);
            $order_detail->order_id = $order->id;
            $order_detail->user_id = Auth::user()->id;
            $order_detail->shipping_id = $shipping->id;
            $order_detail->delivery_id = $delivery->id;
            $order_detail->payment_id = $payment->id;
            $order_detail->invoice_id = $invoice->id;
            $order_detail->save();

            $cart = Cart::where('product_id', $value->id)->where('user_id', Auth::user()->id)->first();
            if ($cart->quantity > 1) {
                $cart->decrement('quantity');
            } else {
                $cart->delete();
            }
            $value->decrement('stock');
        } else {
            foreach ((Auth::user()->cart) as $value) {
                $order_detail = new OrderDetails();
                $order_detail->product_id = $value->id;
                $order_detail->pname = $value->name;
                $order_detail->price = $value->price;
                $order_detail->quantity = $value->pivot->quantity;
                $order_detail->product_total = $value->price;
                $order_detail->order_id = $order->id;
                $order_detail->user_id = Auth::user()->id;
                $order_detail->shipping_id = $shipping->id;
                $order_detail->delivery_id = $delivery->id;
                $order_detail->payment_id = $payment->id;
                $order_detail->invoice_id = $invoice->id;
                $order_detail->save();
                Cart::where('product_id', $value->id)->where('user_id', Auth::user()->id)->delete();
                $value->decrement('stock',$value->pivot->quantity);
            }
        }
        $delivery_address = new DeliveryAddress();
        $delivery_address->fname = $request->fname;
        $delivery_address->lname = $request->lname;
        $delivery_address->number = $request->number;
        $delivery_address->street = $request->street;
        $delivery_address->locality = $request->locality;
        $delivery_address->city_id = $request->city_id;
        $delivery_address->state_id = $request->state_id;
        $delivery_address->country_id = $request->country_id;
        $delivery_address->pincode = $request->pincode;
        $delivery_address->delivery_id = $delivery->id;
        $delivery_address->save();
        if ($request->saveadd == 1) {
            $useradd = UserAddress::where('user_id', Auth::user()->id)->first();
            if ($useradd) {
                $useradd->fname = $request->fname;
                $useradd->lname = $request->lname;
                $useradd->number = $request->number;
                $useradd->street = $request->street;
                $useradd->locality = $request->locality;
                $useradd->city_id = $request->city_id;
                $useradd->state_id = $request->state_id;
                $useradd->country_id = $request->country_id;
                $useradd->pincode = $request->pincode;
                $useradd->save();
            } else {
                $useradd = new UserAddress();
                $useradd->fname = $request->fname;
                $useradd->lname = $request->lname;
                $useradd->number = $request->number;
                $useradd->street = $request->street;
                $useradd->locality = $request->locality;
                $useradd->city_id = $request->city_id;
                $useradd->state_id = $request->state_id;
                $useradd->country_id = $request->country_id;
                $useradd->pincode = $request->pincode;
                $useradd->user_id = Auth::user()->id;
                $useradd->save();
            }
        }
        if ($payment->method == "CARD") {
            session()->put('card_payment', $order);
            return redirect('stripe');
        }
        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
