<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartUserController extends Controller
{
    public function index()
    {
      if (Auth()->user()) {

        $user_id = Auth()->user()->id;

        $DATA = Cart::where('user_id', $user_id)->get();

        $data = [];
        foreach ($DATA as $value) {
          $data[] = [
            'id' => $value->id,
            'quantity' => $value->quantity,
            'product_id' => isset($value->product) ? $value->product->id : "",
            'product_name' => isset($value->product) ? $value->product->name : "",
            'product_price' => isset($value->product) ? $value->product->price : "",
            'product_price_discount' => isset($value->product) ? $value->product->price_discount : "",
            'is_sale' => isset($value->product) ? $value->product->is_sale : "",
            'discount' => isset($value->product) ? $value->product->discount : "",
            'product_image' => isset($value->product) ? $value->product->image : "",
          ];
        }
        $allProducts = Product::all();

        return view('publicUser.cart', ['data' => $data , 'allProducts' => $allProducts]);
      } else {
        $cart = session()->get('cart');
        $array_id = [];
        if ($cart) {


          $data = [];
          foreach ($cart as $key => $value) {
            $DATA = Product::where('id', $key)->get();
            foreach ($DATA as $product) {
              $data[] = [

                'product_id' => $product->id,
                'quantity' => $value['quantity'],
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_price_discount' => $product->price_discount,
                'is_sale' => $product->is_sale,
                'discount' => $product->discount,
                'product_image' => $product->image,

              ];
            }
          }

          $allProducts = Product::all();

          return view('publicUser.cart', ['data' => $data , 'allProducts' => $allProducts]);
        } else {

          $data = [];
          $allProducts = Product::all();

          return view('publicUser.cart', ['data' => $data , 'allProducts' => $allProducts]);
        }
      }
    }
    // _________________________________________________________
    public function addToCart(Request $request, $id)
    {
      // dd($id);
  // dd($request->waight);
  // session()->forget('cart');
  // dd(session('cart'));
  // dd($id);
  // session()->forget('cart');
  // return redirect()->back();
  // dd($request->quantity);


      $product = Product::find($id);
      $cart = session()->get('cart');
      session()->put('kitchen_id', $product->user_id);
      $kitchen_id = session()->get('kitchen_id');

      // if cart is empty then this the first product
      if (!$cart) {

          $quantity = $request->quantity;

        if ($product->is_sale == 1) {

          $price = $product->price_discount;
        } else {
          $price = $product->price;
        }
        $cart = [
          $id => [
            "name" => $product->name,
            "quantity" => $quantity,
            "price" => $price,
          ]
        ];


        session()->put('cart', $cart);

        // dd(session('cart'));

        if (Auth()->user()) {

          $user_id = Auth()->user()->id;
          $quantity = $request->quantity;

          Cart::create([

            'product_id' => $id,
            'user_id' => $user_id,
            'quantity' => $quantity,

          ]);
        }
        return redirect()->back()->with('success', 'تمت اضافة المنتج الى السلة');
      }




      // if cart not empty then check if this product exist then increment quantity
      if (isset($cart[$id])) {

        // dd('المنتج موجود بالفعل بالسلة');
        return redirect()->back()->with('failed', 'المنتج موجود بالفعل بالسلة');
      }
      // if item not exist in cart then add to cart with quantity = 1



      if ($cart) {
          $quantity = $request->quantity;

        if ($product->is_sale == 1) {
          $price = $product->price_discount;
        } else {
          $price = $product->price;
        }

        $cart[$id] = [
          "name" => $product->name,
          "quantity" => $quantity,
          "price" => $price,

        ];
        session()->put('cart', $cart);

        if (Auth()->user()) {


          $user_id = Auth()->user()->id;
          $quantity = $request->quantity;

          Cart::create([
            'product_id' => $id,
            'user_id' => $user_id,
            'quantity' => $quantity,

          ]);
        }
        // return view('user.index')->with('success', 'تمت اضافة المنتج الى السلة');

        return redirect()->back()->with('success', 'تمت اضافة المنتج الى السلة');

      }
    }


    public function update(Request $request)
    {

        $products = $request->input('products');
        // $cart = session()->get('cart');

        // dd($cart);

      if (Auth()->user()) {

        $user_id = Auth()->user()->id;
        foreach ($products as $product) {
            $productId = $product['id'];
            $quantity = $product['quantity'];

            // Find the product in the database
            $product = Product::findOrFail($productId);

            // Update the quantity in the basket
            // You can implement your own logic here based on your database structure
            // For example, if you have a "basket" table with a "quantity" column:
            $cart = Cart::where('product_id', $productId)->where('user_id',$user_id)->first();
            $cart->quantity = $quantity;
            $cart->save();

            $cart = session()->get('cart');

            // dd($cart);
            $cart[$productId]['quantity']=$quantity;
            session()->put('cart', $cart);

        }

        // $data = Cart::where('user_id',$user_id)->get();
        //         session()->forget('cart');
        //         $cart = session()->get('cart');
        //         if(count($data)!=0){
        //             foreach ($data as $value ) {

        //                 $cart[$value->product_id] =[
        //                   "name" => $value->product->namepro,
        //                   "quantity" => $value->quantity,
        //                   "weight" => $value->weight,

        //                 ];


        //             }

        //             session()->put('cart', $cart);
        //         }

                return redirect()->route('user.cart');
        }
        else{
            foreach ($products as $product) {
                $productId = $product['id'];
                $quantity = $product['quantity'];

                // Find the product in the database
                $product = Product::findOrFail($productId);

                $cart = session()->get('cart');
                $cart[$productId]['quantity']=$quantity;
                session()->put('cart', $cart);

            }


                return redirect()->route('user.cart');
        }
      }

    public function destroy($id)
    {
      if ($id) {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
          unset($cart[$id]);
          session()->put('cart', $cart);
          if (Auth()->user()) {
            $user_id = Auth()->user()->id;

            Cart::where('product_id', $id)->where('user_id', $user_id)->delete();
          }
        } else {
          $user_id = Auth()->user()->id;

          Cart::where('product_id', $id)->where('user_id', $user_id)->delete();
        }
        return redirect()->back();

        // session()->flash('success', 'Product removed successfully');
      }
    }
}
