<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\OrderDetails;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        //dd(Auth::user()->cart->sum('pivot.quantity'));
        //dd(date('Y'));
        // $product = Product::find(1);
        // dd($product->cart[0]->pivot->quantity);
        $bestselling = OrderDetails::selectRaw("SUM(quantity) as quantity,product_id")
            ->whereMonth('created_at', date("m"))
            ->groupBy('product_id')
            ->orderBY('quantity', 'DESC')->skip(0)->take(6)->get();

        //->pluck('product_id','quantity')->toArray();
        //foreach ($bestselling)
        //$products= Product::whereIn($bestselling)->get();
        //dd($bestselling);
        $products = Product::all();
        $categories = Category::all();
        //$category = Category::find(1);
        $data = compact('products', 'categories', 'bestselling');
        return view('frontend.index')->with($data);
    }
    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $data = compact('product');
        return view('frontend.detail')->with($data);
    }
    public function search(Request $request)
    {
        $searchValues = explode(' ', $request->search);
        //dd($searchValues);
        //$products = Product::whereFullText('name',$request->search)->get();
        // $categories = Category::where(function ($q) use ($searchValues) {
        //     foreach ($searchValues as $value) {
        //         $q->orWhere('name', 'like', "%{$value}%")
        //             ->orWhere('slug', 'like', "%$value%");
        //     }
        // })->get();

        // foreach ($categories as $category) {
        //     $products = Product::where(function ($q) use ($searchValues) {
        //         foreach ($searchValues as $value) {
        //             $q->orWhere('name', 'like', "%$value%")
        //                 ->orWhere('slug', 'like', "%$value%")
        //                 ->orWhere('category->name',"%$value%");
        //         }
        //     })->orWhere('category_id', $category->id)
        //     ->get();
        // }
        // $products = Product::with(['category' => function ($query) {
        //     $query->where('name','clothes');
        // }])->get();
        $products = Product::where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
                $q->orWhere('name', 'like', "%$value%")
                    ->orWhere('slug', 'like', "%$value%");
            }
        })->get();
        // ->with(['category' => (function ($query) use ($searchValues) {
        //     foreach ($searchValues as $value) {
        //     $query->orwhere('name', $value);
        //     }
        // })])
        // ->get();
        //Product::all()->category->where('name', $request->search);
        //dd($value);
        //dd($products);
        $data = compact('products');
        return view('frontend.product')->with($data);
    }
    public function contactus(){
        return view('frontend.contactus');
    }
}
