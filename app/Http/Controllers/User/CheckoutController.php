<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('CheckLogin');
    }

    public function index()
    {
        if(session('total_price')!=0){

            $allProducts = Product::all();

            return view('publicUser.checkout' , ['allProducts' => $allProducts]);
        }else{
            return redirect()->back();

        }
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
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required','string', 'email', 'max:255'],
            'phone' => ['required'],
            'area_name' => ['required'],
            'street_name' => ['required'],
            'received_date' => ['required'],

        ]);
        $user_id = Auth()->user()->id;
        $total_price=session('total_price');
        $kitchen_id = session()->get('kitchen_id');
        $last_order = Order::create([

            'user_id' => $user_id,
            'total_price' => $total_price,
            'kitchen_id' => $kitchen_id,


        ]);

        $last_order_id = $last_order->id;

        $data_cart = Cart::where('user_id', $user_id)->get();

        $data = [];
        foreach ($data_cart as $value) {
            $data[] = [

                'product_id' => isset($value->product) ? $value->product->id : "",
                'product_price' => isset($value->product) ? $value->product->price : "",
                'product_new_price' => isset($value->product) ? $value->product->price_discount : "",
                'product_discount' => isset($value->product) ? $value->product->discount : "",
                'product_is_sale' => isset($value->product) ? $value->product->is_sale : "",
                'quantity' => $value->quantity,

            ];
        }

        Checkout::create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'area_name' => $request->area_name,
            'street_name' => $request->street_name,
            'received_date' => $request->received_date,
            'notes' => $request->notes,
            'order_id' => $last_order_id,


        ]);
        foreach($data as $value){

            if($value['product_is_sale'] != 0){
                $price= $value['product_new_price'];
            }else{
                $price= $value['product_price'];
            }
            OrderDetails::create([

                'order_id' => $last_order_id,
                'user_id' => $user_id,
                'product_id' => $value['product_id'],
                'quantity' => $value['quantity'],
                'price' =>$price * $value['quantity'],


            ]);
        }

        Cart::where('user_id', $user_id)->delete();
        session()->forget('cart');
        session()->forget('total_price');




        // return redirect()->route('user.profile_user.index');
        return redirect()->route('user.profile.index')->with('successCheckout','تم إكمال طلبك بنجاح ,سيتم تأكيد طلبك من المطبخ.');




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
        //
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
