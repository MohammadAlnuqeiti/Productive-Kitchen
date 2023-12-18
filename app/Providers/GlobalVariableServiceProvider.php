<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Order;

class GlobalVariableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if (auth()->check()) {

            // Set your global variables here
            $kitchen_id = auth()->user()->id;
            $pendingOrderss = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

            view()->share('pendingOrders', $pendingOrderss);
            }
    }
}
