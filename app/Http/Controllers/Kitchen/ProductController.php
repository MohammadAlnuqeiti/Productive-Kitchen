<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\StoreProducteRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Order;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //we need the user see just the info. for her kitchen (not all kitchen each kitchen owner has kitchen),like a session concept in php
        $kitchen_id = Auth()->user()->id;
        $products = Product::where('user_id', $kitchen_id)
                            ->get();
        // return pending orders
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.product.show', ['products'=>$products,'pendingOrders'=>$pendingOrders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //to show create product page
        // return view('kitchenDashboard.product.create');
        $categorios = Category::all();
        // return pending orders
        $kitchen_id = auth()->user()->id;
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.product.create' , ['categorios' => $categorios , 'pendingOrders'=>$pendingOrders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducteRequest $request)
    {

        // get the authenticated user's kitchen ID
        $kitchen_id = Auth()->user()->id;

        // store the uploaded image file
        $product_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images',$product_img);

        // create a new product with the input data
        // insert products

        $product = new Product();
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->price = $request->price;
        $product->user_id = $kitchen_id;
        $product->category_id = $request->category_id;
        $product->image = $product_img;
        $product->save();

        return redirect()->route('kitchen.products.index')
                        ->with('success', 'تمت إضافة المنتج بنجاح.');
     }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get();
        $data = [];
        foreach ($product as $value) {
            $data = [
                'id' => $value->id,
                'name' => $value->name,
                'short_description' => $value->short_description,
                'long_description' => $value->long_description,
                'price' => $value->price,
                'image' => $value->image,
                'price_discount' => $value->price_discount,
                'discount' => $value->discount,
                'kitchen_name' => isset($value->user) ? $value->user->name : "",
                'category_name' => isset($value->kategory) ? $value->kategory->name : "",
            ];
        }
        if($product->isEmpty()) {
            return redirect()->back();
        }
        // return pending orders
        $kitchen_id = auth()->user()->id;
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.product.productDetails', [
            'data' =>  $data ,
            'pendingOrders'=> $pendingOrders
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(count(Product::all()) < $id || $id < 0){
            return redirect()->back();
        }

        $kitchen_id = Auth()->user()->id;
        $products = Product::where('user_id' , $kitchen_id )->get();
        $categorios = Category::all();
        // return pending orders
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.product.edit', [
            'product' => Product::findOrFail($id),
            'categorios' => $categorios ,
            'pendingOrders'=>$pendingOrders
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // create validation using Validator Facade
        $rules = array(
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        );

        // customize error message
        $messages = [
            'name.required' => 'حقل الاسم مطلوب ادخاله.',
            'short_description.required' => 'حقل الوصف مطلوب ادخاله.',
            'long_description.required' => 'حقل التفاصيل مطلوب ادخاله.',
            'price.required' => ' حقل السعر مطلوب ادخاله. ',
            'price.numeric' => ' حقل السعر يجب ان يكون عدد وليس نص. ',
            'category_id' => 'حقل الصنف مطلوب ادخاله.',
        ];

        $validator = Validator::make($request->all(), $rules , $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $product=Product::findorFail($id);
        $product->name=$request->name;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        $product->price=$request->price;
        $product->category_id=$request->category_id;

        if ($request->file('image')) {
            $rules = array(
                'image' =>'required|image|mimes:jpg,png,jpeg,gif|max:2048'
            );
            $messages = [
                'image.required' => 'حقل الصورة مطلوب ادخاله.',
                'image.image' => 'حقل الصورة يجب ان يكون صورة.',
                'image.mimes' => ' jpg,png,jpeg,gif الصورة يجب ان تكون بصيغة .',
                'image.max' => ' الصورة يجب ان لا يتجاوز حجمها 2048 .',
            ];
            $validator = Validator::make($request->all(), $rules , $messages);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors())->withInput();
            }

            $photoName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $photoName);
            $product->image=$photoName;
        }

        $product->save();
         return redirect()->route('kitchen.products.index')->with('success','تمت عملية التعديل بنجاح');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findorFail($id)->delete();
        return redirect()->route('kitchen.products.index');
    }
}
