<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Kitchen_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;


class ReceivingProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitchen_id = Auth()->user()->id;
        $kitchenDetails = Kitchen_Details::where('user_id', $kitchen_id)
                                ->first();
        $products = Product::where('user_id', $kitchen_id)
                            ->get();

        return view('kitchenDashboard.activeProduct.show', ['products'=>$products , 'kitchenDetails'=>$kitchenDetails]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('kitchenDashboard.activeProduct.create',['product'=>$product]);
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

        if($request->customRadio == 0){
            $product=Product::findorFail($id);
            $product->is_active = 1;
            $product->duration_of_product_recommendation = 0;
            $product->save();

            // edit status of kitchen if is active = 0
            $kitchen_id = Auth()->user()->id;
            $data=Kitchen_Details::where('user_id',$kitchen_id)->first();
            if(  $data->is_active != 1 ){
                $data->is_active = 1;
                $data->save();
            }


        }else{
            $rules = array(
                'duration' => 'required|numeric',
            );

            // customize error message
            $messages = [
                'duration.required' => 'حقل المدة المطلوبة للتوصية على الطلب مطلوب ادخاله.',
                'duration.numeric' => 'حقل المدة المطلوبة للتوصية على الطلب يجب ان يكون رقم.',
                // 'duration.max' => 'حقل المدة المطلوبة للتوصية على الطلب يجب ان لا يتعدى خانتين.',
            ];

            $validator = Validator::make($request->all(), $rules , $messages);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors());
            }
            $product=Product::findorFail($id);
            $product->is_active = 1;
            $product->duration_of_product_recommendation = $request->duration;
            $product->save();

            // edit status of kitchen if is active = 0
            $kitchen_id = Auth()->user()->id;
            $data=Kitchen_Details::where('user_id',$kitchen_id)->first();
            if(  $data->is_active != 1 ){
                $data->is_active = 1;
                $data->save();
            }

        }
        return redirect()->route('kitchen.receivingProduct.index')
                        ->with('success', 'تمت العملية بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findorFail($id);
        $product->is_active = 0;
        $product->duration_of_product_recommendation = 0;
        $product->save();

        return redirect()->back();

    }
}
