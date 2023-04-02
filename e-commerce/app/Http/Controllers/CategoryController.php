<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Delivery;
use App\Models\DeliveryAddress;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Payment;
use App\Models\OrderDetails;
use App\Models\UserAddress;
use App\Models\Status;

use App\Models\Category;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $data = compact('categories');
        return view('admin.catalog.categories')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $data = compact('status');
        return view('admin.catalog.add-category')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->kt_ecommerce_add_category_description);
        //dd($request);
        $category = new Category();
        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->status = $request->status;
        $category->description = $request->description;
        if ($request->file('avatar')) {
            //dd($request->file('avatar'));
            $file = $request->file('avatar');
            //dd($file);
            $filename = date('YmdHi') . $request->category_name . "." . $file->extension();
            $file->move(public_path('assets/cat_images'), $filename);
            $category->icon = "assets/cat_images/" . $filename;
        }
        //dd($category);
        $category->save();
        return redirect('admin/catalog/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $status = Status::all();
        $data = compact('category', 'status');
        return view('admin.catalog.edit-category')->with($data);
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
        $category = Category::find($id);
        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->status = $request->status;
        $category->description = $request->description;
        if ($request->file('avatar')) {
            //dd($request->file('avatar'));
            //dd($file);
            $path = public_path().$category->icon;
            if (file_exists($path)) {
                unlink($path);
            }
            $file = $request->file('avatar');
            $filename = date('YmdHi') . $request->category_name . "." . $file->extension();
            $file->move(public_path('assets/cat_images'), $filename);
            $category->icon = "assets/cat_images/" . $filename;
        }
        //dd($category);
        $category->save();
        return redirect('admin/catalog/category');
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
}
