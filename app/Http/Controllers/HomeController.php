<?php

namespace App\Http\Controllers;

use App\Models\Kitchen_Details;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

            // session()->forget('cart');

      if(session()->has('cart')){
        if(Auth()->user()){

            $user_id = Auth()->user()->id;

            $cart = session()->get('cart');
            // dd($cart);
            // بنخزن السشن في التيبل
            foreach ($cart as $key => $value ) {
              // تشييك المنتج اذا كان متواجد في الكارت او لا
                $data = Cart::where('product_id',$key)->where('user_id',$user_id)->get();
                // dd($data);
                if(count($data)==0){
                    // dd(session()->has('cart'));

                Cart::create([
                    'product_id' => $key,
                    'user_id' => $user_id,
                    'quantity' => $value['quantity'],
                ]);
            }

            }
            // نعاود تخزين التيبل كامل في السشن
            $data = Cart::where('user_id',$user_id)->get();
            session()->forget('cart');
            $cart = session()->get('cart');
            if(count($data)!=0){
                foreach ($data as $value ) {

                    if( $value->product->is_sale == 0){
                        $price = $value->product->price;
                    }else{
                        $price = $value->product->price_discount;
                    }

                    $cart[$value->product_id] =[
                      "name" => $value->product->name,
                      "quantity" => $value->quantity,
                      "price" => $price,
                    ];


                }

                // dd($cart);
                session()->put('cart', $cart);
            }
        }


    }else{

    // اذا ما كان في سشن واليزر دخل  في وقت ثاني
        if(Auth()->user()){

            $user_id = Auth()->user()->id;
            $data = Cart::where('user_id',$user_id)->get();

            $cart = session()->get('cart');
            if(count($data)!=0){
                foreach ($data as $value ) {

                    if( $value->product->is_sale == 0){
                        $price = $value->product->price;
                    }else{
                        $price = $value->product->price_discount;
                    }
                    $cart[$value->product_id] =[


                  "name" => $value->product->name,
                  "quantity" => $value->quantity,
                  "price" => $price,


                    ];


                }

                session()->put('cart', $cart);
            }



    }
}

        $allProducts = Product::all();
        $kitchens = Kitchen_Details::all();
        $products = Product::all();
        return view('publicUser.index' , ['products'=>$products , 'kitchens'=>$kitchens , 'allProducts' => $allProducts]);
    }
}
