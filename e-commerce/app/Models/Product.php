<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = "products";
    protected $primarykey = "id";
    protected $casts = [
        'related' => 'array',
        'tags' => 'array',
        'media' => 'array',
    ];
    public function user_cart(){
        return $this->belongsToMany(User::class,'carts');
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function orders(){
        return $this->hasMany(OrderDetails::class);
    }
    // public function orders_details(){
    //     //dd($this);
    //     return (OrderDetails::where('product_id',$this->id)->get());
    // }
}
