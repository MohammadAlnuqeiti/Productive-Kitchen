<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductDiscountRequest;
use App\Models\Product;

class DiscountKitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=Product::where('is_sale',1)->where('user_id',Auth()->user()->id)->get();

        return view('kitchenDashboard.discount.show',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::where('user_id',Auth()->user()->id)->get();

        return view('kitchenDashboard.discount.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductDiscountRequest $request)
    {
 
        $product_id = $request->product_id;

        $data = Product::findOrfail($product_id);
        $data->discount = $request->discount_product;
        $data->is_sale = 1;
        $data->price_discount = $data->price * (1 - $request->discount_product / 100);

        $data->save();

        return redirect()->route('kitchen.discount.index')->with('success','تمت إضافة الخصم بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->first();
        if($product == null){
            return redirect()->back();
        }
        return view('kitchenDashboard.discount.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductDiscountRequest $request, $id)
    {
        
        $validated = $request->safe()->only(['name', 'email']);


        $product_id = $id;

        $data = Product::findOrfail($product_id);
        $data->discount = $request->discount_product;
        $data->is_sale = 1;
        $data->price_discount = $data->price * (1 - $request->discount_product / 100);
        $data->save();

        return redirect()->route('kitchen.discount.index')->with('success','تمت عملية تعديل الخصم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrfail($id);
        $data->discount = 0;
        $data->is_sale = 0;
        $data->price_discount = 0;
        $data->save();
        return redirect()->route('kitchen.discount.index');
    }
}
