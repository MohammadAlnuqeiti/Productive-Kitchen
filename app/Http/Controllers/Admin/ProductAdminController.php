<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('adminDashboard.product.show', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kitchens = User::where('role','kitchen')->get();
        $categorios = Category::all();
        return view('adminDashboard.product.create' , ['kitchens'=>$kitchens , 'categorios' => $categorios]);

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
            'name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'price' => ['required'],
            'kitchen_id' => ['required'],
            'category_id' => ['required'],
            'image' =>['required','image','mimes:jpg,png,jpeg,gif','max:2048'],

        ]);
        $product_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images',$product_img);

        // insert products
        $categories = new Product();
        $categories->name = $request->name;
        $categories->short_description = $request->short_description;
        $categories->long_description = $request->long_description;
        $categories->price = $request->price;
        $categories->user_id = $request->kitchen_id;
        $categories->category_id = $request->category_id;
        $categories->image = $product_img;
        $categories->save();

        return redirect()->route('admin.products.index')->with('success','Addition completed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->get();
        $data = [];
        foreach ($product as $value) {
            $data = [
                'id' => $value->id,
                'name' => $value->name,
                'short_description' => $value->short_description,
                'long_description' => $value->long_description,
                'price' => $value->price,
                'image' => $value->image,
                'price_discount' => $value->price_discount,
                'discount' => $value->discount,
                'kitchen_name' => isset($value->user) ? $value->user->name : "",
                'category_name' => isset($value->kategory) ? $value->kategory->name : "",
            ];
        }
        if($product->isEmpty()) {
            return redirect()->back();
        }

        return view('adminDashboard.product.productDetails', [
            'data' =>  $data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(count(Product::all()) < $id || $id < 0){
            return redirect()->back();
        }

        $kitchens = User::where('role','kitchen')->get();
        $categorios = Category::all();

        return view('adminDashboard.product.edit', [
            'product' => Product::findOrFail($id),
            'kitchens' => $kitchens,
            'categorios' => $categorios,
        ]);
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
        $request->validate([
            'name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'price' => ['required'],
            'kitchen_id' => ['required'],
            'category_id' => ['required'],
        ]);

        $product=Product::findorFail($id);
        $product->name=$request->name;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        $product->price=$request->price;
        $product->user_id=$request->kitchen_id;
        $product->category_id=$request->category_id;

        if ($request->file('image')) {
            $request->validate([
                'image' =>['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
            ]);
            $photoName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $photoName);
            $product->image=$photoName;
        }

        $product->save();
         return redirect()->route('admin.products.index')->with('success','Updated completed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findorFail($id)->delete();
        return redirect()->route('admin.products.index');

    }
}
