<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Kitchen_Review;
use Illuminate\Http\Request;

class KitchenReviewController extends Controller
{

    public function index()
    {
        $reviews = Kitchen_Review::all();
        return view('user.index')->with('reviews', $reviews);
    }

    public function store(Request $request)
    {

        $id = Auth()->user()->id;

        $rules = array(
            'comment' => ['required'],
        );
        $messages = [
            'comment.required' => 'حقل التعليق مطلوب ادخاله.',
        ];
        $validator = Validator::make($request->all(), $rules , $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }
  
        Kitchen_Review::create([

            'user_id' =>  $id,
            'comment' => $request->comment,
            'kitchen_id' => $request->kitchen_id,


        ]);

        return redirect()->back();

    }

}
