<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected  $table = "sellers";
    protected $primarykey = "id";

    public function Products(){
        return $this->hasMany(Product::class);
    }
}
