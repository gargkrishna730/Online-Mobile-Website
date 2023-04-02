<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Delivery;
use App\Models\DeliveryAddress;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\OrderDetails;
use App\Models\UserAddress;
use App\Models\Cart;
class StripeController extends Controller
{
    public function view()
    {

        $order = Order::find(session()->get('card_payment')->id);
        $data = compact('order');
        return view('stripe.stripe')->with($data);
    }
    public function post(Request $request)
    {
        $order = Order::find(session()->get('card_payment')->id);
        Stripe\Stripe::setApiKey(Config::get('services.stripe.secret'));
        $customer = Stripe\Customer::create(array(

            "address" => [

                "line1" => $order->delivery->address->street,

                "postal_code" => $order->delivery->address->pincode,

                "city" => $order->delivery->address->city->name,

                "state" => $order->delivery->address->state->name,

                "country" => "IN",

            ],


            "name" => $order->delivery->address->fname . " " . $order->delivery->address->lname,

            "source" => $request->stripeToken

        ));



        Stripe\PaymentIntent::create([

            "amount" => 100 * 100,

            "currency" => "inr",

            "customer" => $customer->id,

            "description" => $order->id . "-#" . $order->user->id . "-" . $order->user->name,

            "shipping" => [

                "name" => $order->delivery->address->fname . " " . $order->delivery->address->lname,

                "address" => [

                    "line1" => $order->delivery->address->street,

                    "postal_code" => $order->delivery->address->pincode,

                    "city" => $order->delivery->address->city->name,

                    "state" => $order->delivery->address->state->name,

                    "country" => "IN",

                ],

            ]

        ]);

        session()->flash('success', 'Payment successful!');
        $order->payment->status = "PROCESSED";
        $order->payment->status_slug = "processed";
        $order->push();
        session()->forget('card_payment');
        return redirect('orders');
    }
}
