<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kitchen_Details;
use App\Models\Kitchen_Review;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class KitchenDetailsController extends Controller
{
    public function show($id)
    {
        $reviews = Kitchen_Review::where('kitchen_id', $id)->get();
        $kitchen = User::where('id', $id)->get();
        $number_of_products = Product::where('user_id', $id)->count();
        $categorios = Category::all();
        $products = Product::where('user_id' , $id)->get();
        $productsActive = Product::where('user_id' , $id)->where('is_active',1)->get();
        $allProducts = Product::all();


        // dd($reviews);
        $data = [];
        foreach ($kitchen as $value) {
            $data = [
                'id' => $value->id,
                'first_name' => $value->first_name,
                'last_name' => $value->last_name,
                'email' => $value->email,
                'phone' => $value->phone,
                'kitchen_name' => isset($value->kitchen) ? $value->kitchen->kitchen_name : "",
                'short_description' => isset($value->kitchen) ? $value->kitchen->short_description : "",
                'long_description' => isset($value->kitchen) ? $value->kitchen->long_description : "",
                'Facebook_link' => isset($value->kitchen) ? $value->kitchen->Facebook_link : "",
                'Instagram_link' => isset($value->kitchen) ? $value->kitchen->Instagram_link : "",
                'is_active' => isset($value->kitchen) ? $value->kitchen->is_active : "",
                'image' => isset($value->kitchen) ? $value->kitchen->image : "",
            ];
        }
        if($kitchen->isEmpty()) {
            return redirect()->back();
        }

        return view('publicUser.kitchenDetails', [
            'data' =>  $data ,
            'number_of_products' => $number_of_products ,
            'reviews' => $reviews ,
            'categorios' => $categorios ,
            'products' => $products ,
            'productsActive' => $productsActive,
            'allProducts' => $allProducts
        ]);

    }
}
