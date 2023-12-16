<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $allProducts = Product::all();
        return view('publicUser.contactUs' , [ 'allProducts' => $allProducts]);
    }
    public function show(){
        $data=Contact::all();
        return view('adminDashboard.messages.show',['data'=>$data]);
    }
    public function store(StoreMessageRequest $request)
    {

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);
        return redirect()->route('user.contact')->with('success','نشكركم على التواصل معنا. نحن نقدر جهدكم وسنبذل قصارى جهدنا للرد على استفساراتك.');

    }
}
