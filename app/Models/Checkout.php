<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','email','phone','area_name','street_name','received_date','notes','order_id'];



    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
