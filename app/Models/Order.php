<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'kitchen_id',
        'order_receive',
        'message',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function checkout()
    {
        return $this->hasOne(Checkout::class);
    }
}
