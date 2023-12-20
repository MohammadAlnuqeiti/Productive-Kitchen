<?php

namespace App\Http\Controllers\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = Auth()->user()->id;
        $kitchen = User::where('id', $id)->get();
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
                'image' => isset($value->kitchen) ? $value->kitchen->image : "",


            ];
        }
        if($kitchen->isEmpty()) {
            return redirect()->back();
        }
        // return pending orders
        $kitchen_id = auth()->user()->id;
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.profile.show',['data' => $data , 'pendingOrders' => $pendingOrders]);

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
        $user = User::where('id', $id)->with('kitchen')->firstOrFail();
        // return pending orders
        $kitchen_id = auth()->user()->id;
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.profile.show', ['user' => $user , 'pendingOrders' => $pendingOrders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->with('kitchen')->firstOrFail();
        // return pending orders
        $kitchen_id = auth()->user()->id;
        $pendingOrders = Order::where('kitchen_id',$kitchen_id)->where('status','pending')->get();

        return view('kitchenDashboard.profile.edit', ['user' => $user , 'pendingOrders' => $pendingOrders]);

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
        $data = User::findOrfail($id);
        $email=$data->email;
        $phone=$data->phone;

         //  first name and last name validation
         $rules = array(
            'first_name' => ['required'],
            'last_name' => ['required'],
        );
        $messages = [
            'first_name.required' => 'حقل  الاسم الاول مطلوب ادخاله.',
            'last_name.required' => 'حقل  الاسم الثاني مطلوب ادخاله.',
        ];
        $validator = Validator::make($request->all(), $rules , $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;

        //  email validation

        if($email !== $request->email){

            $rules = array(
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            );
            $messages = [
                'email.required' => 'حقل  الايميل مطلوب ادخاله.',
                'email.email' => 'حقل الايميل يجب ان  يكون بصيغة ايميل.',
                'email.max' => 'حقل الهاتف يجب ان  يكون اقل من 255 خانات.',
                'email.unique' => 'الايميل  موجود مسبقا.',
            ];
            $validator = Validator::make($request->all(), $rules , $messages);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors())->withInput();
            }
            $data->email = $request->email;
        }
        //  phone validation

        if($phone !=$request->phone){

            $rules = array(
                'phone' => ['required', 'max:10' ,'min:9','unique:'.User::class],
            );
            $messages = [
                'phone.required' => 'حقل  رقم الهاتف مطلوب ادخاله.',
                'phone.min' => 'حقل الهاتف يجب ان لا يكون اقل من 10 خانات.',
                'phone.unique' => 'رقم الهاتف موجود مسبقا.',
            ];
            $validator = Validator::make($request->all(), $rules , $messages);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors())->withInput();
            }

            $data->phone = $request->phone;
        }
        //  image validation

        if($request->file('image')){

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
            $data->image=$photoName;
        }


        if ($request->password) {
            $data->password = Hash::make($request->password);
        }

        // Update other user profile fields as needed

        $data->save();

        return redirect()->route('kitchen.profile.index')->with('success', 'تمت عملية التعديل بنجاح.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }
}
