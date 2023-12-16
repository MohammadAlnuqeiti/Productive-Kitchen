<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // To display admin information on his personal page

        $id = Auth()->user()->id;
        $data=User::where('id',$id)->first();
        return view('adminDashboard.profile.show',['data'=>$data]);
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
        // dd($id);
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
        ]);

        $user=User::findorFail($id);
        $email=$user->email;
        $phone=$user->phone;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;

        if($email !== $request->email){
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],

            ]);

            $user->email = $request->email;
        }
        if($phone != $request->phone){
            $request->validate([
                'phone' => ['required', 'numeric', 'unique:'.User::class],

            ]);

            $user->phone = $request->phone;
        }
        if ( $request->file('image')) {
            $photoName = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $photoName);
            $user->image=$photoName;

        }
        if ( $request->password) {
              $request->validate([
                'password' => ['required', Rules\Password::defaults()],

            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('admin.profile.index');
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
