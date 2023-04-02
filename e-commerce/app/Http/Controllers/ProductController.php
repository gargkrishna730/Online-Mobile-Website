<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\Delivery;
use App\Models\DeliveryAddress;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderDetails;
use App\Models\Status;
use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $data = compact('products');
        return view('admin.catalog.products')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $status = Status::all();
        $data = compact('categories', 'status');
        return view('admin.catalog.add-product')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->media[0]);
        //dd("");
        $product = new Product();
        $product->name = $request->product_name;
        $product->slug = Str::slug($request->product_name);
        $product->seller_id = 1;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        if ($request->discount_option == "2") {
            $product->discount = $request->discount;
        }
        $product->related = json_encode($request->related);
        $product->tags = $request->tags;
        //$product->gallery = $request->file('avatar')->store('assets/product_images/');
        $media = [];
        foreach ($request->media as $key => $file) {
            //dd($key);
            $path = public_path('assets/product_images/') . $file;
            //dd($path);
            $name = date('YmdHi') . $product->slug . $key . ".png";
            //dd($name);
            rename($path, public_path('assets/product_images/') . $name);
            //Storage::move($path, $name);
            array_push($media, "assets/product_images/" . date('YmdHi') . $product->slug . $key . ".png");
        }
        //dd($media);
        //dd("hello");
        $product->media = json_encode($media);
        if ($request->file('avatar')) {
            //dd($request->file('avatar'));
            $file = $request->file('avatar');
            //dd($file);
            $filename = date('YmdHi') . $product->slug . "." . $file->extension();
            $file->move(public_path('assets/product_images'), $filename);
            $product->gallery = "assets/product_images/" . $filename;
        }
        // $product->gallery = $request->file('avatar')
        //     ->storeAs('assets/product_images/', date('YmdHi') . $product->slug . ".png");
        //dd($product->gallery);
        $product->save();
        return redirect('/admin/catalog/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $status = Status::all();
        $product = Product::find($id);
        $data = compact('categories', 'status', 'product');
        return view('admin.catalog.edit-product')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);

        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->slug = Str::slug($request->product_name);
        $product->seller_id = 1;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        if ($request->discount_option == "2") {
            $product->discount = $request->discount;
        }
        $product->related = json_encode($request->related);
        $product->tags = $request->tags;
        //$product->gallery = $request->file('avatar')->store('assets/product_images/');
        $media = [];
        if (!empty($request->media)) {
            foreach ($request->media as $key => $file) {
                //dd($key);
                $path = public_path('assets/product_images/') . $file;
                //dd($path);
                $name = date('YmdHi') . $product->slug . $key . ".png";
                //dd($name);
                rename($path, public_path('assets/product_images/') . $name);
                //Storage::move($path, $name);
                array_push($media, "assets/product_images/" . date('YmdHi') . $product->slug . $key . ".png");
            }
            foreach (json_decode($product->media) as $key => $value) {
                $img = public_path() . '/' . $value;
                if (file_exists($img)) {
                    //dd($img);
                    unlink($img);
                }
            }
            $product->media = json_encode($media);
        }
        if ($request->file('avatar')) {
            //dd($request->file('avatar'));
            $file = $request->file('avatar');
            //dd($file);
            $filename = date('YmdHi') . $product->slug . "." . $file->extension();
            $file->move(public_path('assets/product_images'), $filename);
            // $proimg = public_path() . '/' . $product->gallery;
            // if (file_exists($proimg)) {
            //     //dd($proimg);
            //     unlink($proimg);
            // }
            $product->gallery = "assets/product_images/" . $filename;
        }
        // $product->gallery = $request->file('avatar')
        //     ->storeAs('assets/product_images/', date('YmdHi') . $product->slug . ".png");
        //dd($product->gallery);
        $product->save();
        return redirect('/admin/catalog/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function upload(Request $request)
    {
        //dd($request);
        // $path = storage_path('asset/product_images');
        // if (!file_exists($path)) {
        //     mkdir($path, 0777, true);
        // }
        //dd("");
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move(public_path('assets/product_images'), $name);
        //$file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
    public function remove(Request $request)
    {
        //dd($request);
        // $path = storage_path('asset/product_images');
        // if (!file_exists($path)) {
        //     mkdir($path, 0777, true);
        // }
        // $file = $request->file('file');
        // $name = uniqid() . '_' . trim($file->getClientOriginalName());
        // $file->move(public_path('assets/product_images'), $name);
        // //$file->move($path, $name);

        // return response()->json([
        //     'name'          => $name,
        //     'original_name' => $file->getClientOriginalName(),
        // ]);
        //dd("");
        $path = public_path() . '/assets/product_images/' . $request->filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json([
            'name' => $request->filename
        ]);
    }
}
