<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    public function index(){

        return view('adminDashboard.index');

    }
    public function admin(){

        // To display the admin in the table
        // test
        $data=User::where('role','admin')->get();
        return view('adminDashboard.allAdmin.show',['data'=>$data]);

    }
    public function create()
    {

        return view('adminDashboard.allAdmin.create');

    }
    public function store(Request $request){


        // To create a new admin

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required','numeric','unique:'.User::class],
            // 'phone' => ['required','numeric', 'max:10' ,'min:10','unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $user=User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'admin',

        ]);

        return redirect()->route('admin.allAdmin')->with('success','Addition completed successfully');

    }
}
