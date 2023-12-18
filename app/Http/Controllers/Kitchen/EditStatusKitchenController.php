<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Kitchen_Details;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;


class EditStatusKitchenController extends Controller
{

    public function open($id)
    {
        $product=Kitchen_Details::findorFail($id);
        $product->is_active = 1;
        $product->save();
        return redirect()->back();
    }
    public function close($id)
    {
        $product=Kitchen_Details::findorFail($id);
        $product->is_active = 0;
        $product->save();
        $kitchen_id = Auth()->user()->id;
        $products = Product::where('user_id', $kitchen_id)->get();

        // update status of product
        foreach($products as $product){
        $data = Product::findOrfail($product->id);
            if( $data->is_active != 0 ){
                $data->is_active = 0;
                $data->duration_of_product_recommendation = 0;
                $data->save();
            }
        }

        return redirect()->back();
    }
}
