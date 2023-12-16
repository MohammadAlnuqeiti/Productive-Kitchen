<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('CheckUser');
    }
    public function index()
    {
        $id = Auth()->user()->id;
        $data = User::where('id', $id)->get();
        $orders = Order::where('user_id', $id)->get();
        $allProducts = Product::all();

        return view('publicUser.profile',['data' => $data , 'orders' => $orders , 'allProducts' => $allProducts]);
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
        //
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
        $pass= $request->input('old_password');

         // $password_decrypted = Crypt::decrypt($password);
         // $password_decrypted = decrypt($password);

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

        // change password
        if ($request->old_password) {
            if (Hash::check($pass, $data->password)) {

                $rules = array(
                    'new_password'=>'required|string|min:8',
                    'confirm_password'=>'required_with:new_password|same:new_password|min:8',
                );
                $messages = [
                    'new_password.required' => 'حقل الباسوور الجديد مطلوب ادخاله.',
                    'new_password.min' => 'حقل الباسوور الجديد يجب ان يكون اكثر من 8 خانات.',
                    'confirm_password.required' => 'حقل تأكيد الباسوورد مطلوب ادخاله.',
                    'confirm_password.same' => 'حقل تأكيد الباسوورد غير صحيح.',
                    'confirm_password.min' => 'حقل الباسوور الجديد يجب ان يكون اكثر من 8 خانات.',
                ];
                $validator = Validator::make($request->all(), $rules , $messages);

                if ($validator->fails()) {
                    return back()->withErrors($validator->errors())->withInput();
                }
                $data->password= Hash::make($request->input('new_password'));
            }
            else
            {
                return redirect()->back()->with('error','كلمة المرور غير صحيحة');
            }
        }
        $data->save();

        return redirect()->route('user.profile.index')->with('success','تمت عملية التعديل بنجاح');
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
