<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Review;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function show($id)
    {

        $products = Product::where('id', $id)->get();
        $reviews = Product_Review::where('product_id', $id)->get();
        $data = [];
        foreach ($products as $product) {
            $data = [
                'id' => $product->id,
                'name' => $product->name,
                'short_description' => $product->short_description,
                'long_description' => $product->long_description,
                'price' => $product->price,
                'price_discount' => $product->price_discount,
                'discount' => $product->discount,
                'is_sale' => $product->is_sale,
                'is_active' => $product->is_active,
                'duration_of_product_recommendation' => $product->duration_of_product_recommendation,
                'image' => $product->image,
                'created_at' => $product->created_at,
                'category' => isset($product->category) ? $product->category->name : "",
                'kitchen_name' => isset($product->user) ? $product->user->first_name : "",
                'user_id' => isset($product->user) ? $product->user->id : "",

            ];
        }

        $relatedProduct = Product::where('user_id' ,$data['user_id'])->get();

        if($products->isEmpty()) {
            return redirect()->back();
        }

        $cart = session()->get('cart');

        $in_the_basket = false;
        if (isset($cart[$id])) {

            $in_the_basket = true;

        }
        $allProducts = Product::all();

        return view('publicUser.singleProduct',['data' => $data , 'reviews' => $reviews , 'relatedProduct' => $relatedProduct , 'in_the_basket' => $in_the_basket , 'allProducts' => $allProducts]);
    }

    public function createComment(Request $request)
    {

        $id = Auth()->user()->id;

        $rules = array(
            'comment' => ['required'],
        );
        $messages = [
            'comment.required' => 'حقل التعليق مطلوب ادخاله.',
        ];
        $validator = Validator::make($request->all(), $rules , $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        Product_Review::create([

            'user_id' =>  $id,
            'comment' => $request->comment,
            'product_id' => $request->product_id,



        ]);

        return redirect()->back();

    }

}
