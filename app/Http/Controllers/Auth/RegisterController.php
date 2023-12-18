<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = array(
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'max:10' ,'min:9','unique:'.User::class],
            'password'=>'required|string|min:8|confirmed',
            // 'password_confirmation'=>'required_with:password|same:password|min:8',
        );
        $messages = [
            'first_name.required' => 'حقل  الاسم الاول مطلوب ادخاله.',
            'last_name.required' => 'حقل  الاسم الثاني مطلوب ادخاله.',
            'email.required' => 'حقل  الايميل مطلوب ادخاله.',
            'email.email' => 'حقل الايميل يجب ان  يكون بصيغة ايميل.',
            'email.max' => 'حقل الهاتف يجب ان  يكون اقل من 255 خانات.',
            'email.unique' => 'الايميل  موجود مسبقا.',
            'phone.required' => 'حقل  رقم الهاتف مطلوب ادخاله.',
            'phone.min' => 'حقل الهاتف يجب ان لا يكون اقل من 10 خانات.',
            'phone.unique' => 'رقم الهاتف موجود مسبقا.',
            'password.required' => 'حقل الباسوورد  مطلوب ادخاله.',
            'password.min' => 'حقل الباسوورد  يجب ان يكون اكثر من 8 خانات.',
            'password.confirmed' => 'حقل تأكيد الباسوورد غير صحيح.',
            // 'password_confirmation.required' => 'حقل تأكيد الباسوورد مطلوب ادخاله.',
            // 'password_confirmation.same' => 'حقل تأكيد الباسوورد غير صحيح.',
            // 'password_confirmation.min' => 'حقل الباسوور الجديد يجب ان يكون اكثر من 8 خانات.',

        ];
        return Validator::make($data, $rules , $messages);
        // if ($validator->fails()) {
        //     return back()->withErrors($validator->errors())->withInput();
        // }

        // return Validator::make($data, [
        //     'first_name' => ['required', 'string', 'max:255'],
        //     'last_name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'phone' => ['required', 'numeric', 'min:10','unique:users'],
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
