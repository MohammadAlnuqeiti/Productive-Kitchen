<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OrderDetails;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function show($id)
    {
        $orders = OrderDetails::where('order_id', $id)->get();

        $order_no = Order::where('id', $id)->first();

        $allProducts = Product::all();

        return view('publicUser.orderDetails',['orders' => $orders , 'order_no' => $order_no , 'allProducts' => $allProducts]);


    }
}
