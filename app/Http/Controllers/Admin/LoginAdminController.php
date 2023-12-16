<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin')
                        ->withSuccess('Signed in');
        }

        return redirect("admin-login")->with('message', 'Login details are not valid');

    }
    public function destroy()
    {
        Session::flush();
        Auth::logout();
        return Redirect()->route('AdminLogin');

    }
}
