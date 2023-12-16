<?php

namespace App\Http\Controllers\Kitchen;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Kitchen_Details;
use Illuminate\Http\Request;

class EditKitchenDetailsController extends Controller
{
    public function update(Request $request, $id)
    {

    // Find the kitchen details record based on the given ID and kitchen ID
    $kitchenDetails = Kitchen_Details::where('user_id', $id)->first();

    $rules = array(
        'kitchen_name' => ['required'],
        'short_description' => ['required'],       
        'long_description' => ['required'],       
    );
    $messages = [
        'kitchen_name.required' => 'حقل  اسم المطبخ  مطلوب ادخاله.',
        'short_description.required' => 'حقل  الوصف عن المطبخ مطلوب ادخاله.',
        'long_description.required' => 'حقل  تفاصيل المطبخ مطلوب ادخاله.',
    ];
    $validator = Validator::make($request->all(), $rules , $messages);
    
    if ($validator->fails()) {
        return back()->withErrors($validator->errors())->withInput();
    }

    $kitchenDetails->kitchen_name = $request->kitchen_name;  
    $kitchenDetails->short_description = $request->short_description;  
    $kitchenDetails->long_description = $request->long_description;  

    //  image validation

    if($request->file('kitchen_image')){
        
        $rules = array(
            'kitchen_image' =>'required|image|mimes:jpg,png,jpeg,gif|max:2048'
        );
        $messages = [
            'kitchen_image.required' => 'حقل الصورة مطلوب ادخاله.',
            'kitchen_image.image' => 'حقل الصورة يجب ان يكون صورة.',
            'kitchen_image.mimes' => ' jpg,png,jpeg,gif الصورة يجب ان تكون بصيغة .',
            'kitchen_image.max' => ' الصورة يجب ان لا يتجاوز حجمها 2048 .',
        ];
        $validator = Validator::make($request->all(), $rules , $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $photoName = $request->file('kitchen_image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images', $photoName);
        $kitchenDetails->image=$photoName;
    }

    $kitchenDetails->save();

    // Redirect the user to the index page to display the updated kitchen details
    return redirect()->route('kitchen.profile.index')->with('success2', 'تمت عملية التعديل بنجاح.');
    }

}
