<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AllOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::get();

        return view('adminDashboard.orders.show', compact('orders'));

    }
}
