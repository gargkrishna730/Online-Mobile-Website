<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\State;
use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin.login');
    }
    protected function login(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|email',
            'password' => 'required'
        ]);
        //dd($request);
        $admin = Seller::where('email', $request->admin_email)->first();
        if ($admin) {
            if ($admin->slug == "admin") {
                if ($admin->password == $request->password) {
                    session()->put('isAdmin', $admin);
                    return redirect('admin/catalog/category');
                }
                return redirect()->back()->withErrors(['errors' => 'Password is Incorrect']);
            }
            return redirect()->back()->withErrors(['errors' => 'You are not admin']);
        }
        return redirect()->back()->withErrors(['errors' => 'This email does not belongs to admin']);
    }
    public function orderlist()
    {
        $orders = Order::all();
        $data = compact('orders');
        return view('admin.sales.listing')->with($data);
    }
    public function orderdetails($id)
    {
        $order = Order::find($id);
        $cities = City::all();
        $states = State::all();
        $data = compact('order', 'cities', 'states');
        return view('admin.sales.details')->with($data);
    }
    public function editorder($id)
    {
        $order = Order::find($id);
        $cities = City::all();
        $states = State::all();
        $data = compact('order', 'cities', 'states');
        return view('admin.sales.edit-order')->with($data);
    }
    public function updateorder(Request $request, $id)
    {
        //dd($request);
        $order = Order::find($id);
        $order->payment->method = $request->payment_method;
        if ($request->payment_method == "UPI") {
            $order->payment->method_name = "UPI";
            $order->payment->method_slug = "upi";
        } else if ($request->payment_method == "CARD") {
            $order->payment->method_name = "Credit / Debit / ATM Card";
            $order->payment->method_slug = "card";
        } else if ($request->payment_method == "NETBANK") {
            $order->payment->method_name = "Net Banking";
            $order->payment->method_slug = "netbank";
        } else if ($request->payment_method == "COD") {
            $order->payment->method_name = "Cash On Delivery";
            $order->payment->method_slug = "cod";
        }
        $order->payment->status = $request->payment_status;
        if ($request->payment_status == "PENDING") {
            $order->payment->status_slug = "pending";
        } else if ($request->payment_status == "PROCESSED") {
            $order->payment->status_slug = "processed";
        } else if ($request->payment_status == "COMPLETED") {
            $order->payment->status_slug = "completed";
        }
        $order->shipping->status = $request->shipping_status;
        if ($request->shipping_status == "C") {
            $order->shipping->slug = "confirmed";
            $order->shipping->name = "CONFIRMED";
        } else if ($request->shipping_status == "S") {
            $order->shipping->slug = "shipped";
            $order->shipping->name = "SHIPPED";
        }
        $order->delivery->status = $request->delivery_status;
        if ($request->delivery_status == "NS") {
            $order->delivery->name = "Not Shipped";
            $order->delivery->slug = "not-Shipped";
        } else if ($request->delivery_status == "ND") {
            $order->delivery->name = "Not Delivered";
            $order->delivery->slug = "not-delivered";
        } else if ($request->delivery_status == "OD") {
            $order->delivery->name = "Out For Delivery";
            $order->delivery->slug = "out-for-delivery";
        } else if ($request->delivery_status == "DL") {
            $order->delivery->name = "Delivered";
            $order->delivery->slug = "delivered";
        } else if ($request->delivery_status == "C") {
            $order->delivery->name = "Cancelled";
            $order->delivery->slug = "cancelled";
        }
        $order->delivery->date = $request->delivery_date;
        $order->push();
        return redirect('admin/sales/listing');
    }

    public function invoice($id)
    {
        $order = Order::find($id);
        $cities = City::all();
        $states = State::all();
        $data = compact('order', 'cities', 'states');
        return view('admin.invoices.invoice')->with($data);
    }
    public function customerlist()
    {
        $customer = User::all();
        $data = compact('customer');
        return view('admin.customers.listing')->with($data);
    }
}
