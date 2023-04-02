<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }
    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
    public function orderdetails()
    {
        return $this->hasMany(OrderDetails::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
