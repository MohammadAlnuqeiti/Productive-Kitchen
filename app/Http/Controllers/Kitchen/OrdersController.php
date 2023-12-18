<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function save(Request $request,$id)
    {
         // create validation using Validator Facade
         $rules = array(
            'status' => 'required',
        );

        // customize error message
        $messages = [
            'status.required' => 'حقل حالة الطلب مطلوب ادخاله.',
        ];

        $validator = Validator::make($request->all(), $rules , $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $orders = Order::findorFail($id);
        $orders->status=$request->status;
        if($request->message){
            $orders->message=$request->message;
        }
        $orders->save();
        return redirect()->route('kitchen.orders.index')->with('success','تمت عملية التعديل بنجاح');
    }

}
