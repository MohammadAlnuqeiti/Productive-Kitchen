<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kitchen_Details;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::where('role','kitchen')->get();
        return view('adminDashboard.allKitchen.show',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminDashboard.allKitchen.create');

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required','numeric','unique:'.User::class],
            // 'phone' => ['required','numeric', 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'image' =>['required','image','mimes:jpg,png,jpeg,gif','max:2048'],

        ]);
        $kitchen_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images',$kitchen_img);

        // insert in user table
        $user=User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'kitchen',
        ]);

        // insert in kitchen details table
        $kitchens = new Kitchen_Details();
        $kitchens->user_id = $user->id;
        $kitchens->kitchen_name = $request->kitchen_name;
        $kitchens->short_description = $request->short_description;
        $kitchens->long_description = $request->long_description;
        $kitchens->image = $kitchen_img;
        $kitchens->save();

        return redirect()->route('admin.kitchens.index')->with('success','Addition completed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

        return view('adminDashboard.allKitchen.kitchenDetails', [
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
