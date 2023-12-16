<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {

        $products = Product::where('is_active',1)->paginate(9);
        $category = Category::all();
        $allProducts = Product::all();

        return view('publicUser.allProduct',['products'=>$products,'category'=>$category , 'allProducts' => $allProducts]);

    }

    public function showCategory($id){

        $products = Product::where('category_id',$id)->where('is_active',1)->paginate(12);
        $category = Category::all();
        $allProducts = Product::all();


        return view('publicUser.allProduct',['products'=>$products ,'category'=>$category , 'allProducts' => $allProducts]);



    }
}
