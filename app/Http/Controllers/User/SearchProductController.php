<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchProductController extends Controller
{
    // public function search(Request $request)
    // {
    //     $category = Category::all();
    //     $search = $request->input('search');
    //     $results = Product::query()
    //         ->where('name', 'like', '%'.$search.'%')
    //         ->orWhere('long_description', 'like', '%'.$search.'%')
    //         ->paginate(9);

    //     return view('publicUser.allProduct',['products' => $results ,'category' => $category]);
    // }
    public function search(Request $request)
    {
        $category = Category::all();
        $search = $request->input('search');
        $results = Product::query()
            ->where('name', 'like', '%'.$search.'%')
            ->orWhere('long_description', 'like', '%'.$search.'%')
            ->paginate(9);

        $message = $results->isEmpty() ? "Product Not Found" : null;

        $allProducts = Product::all();

        return view('publicUser.allProduct', [
            'products' => $results,
            'category' => $category,
            'message' => $message ,
            'allProducts' => $allProducts
        ]);
    }



}


