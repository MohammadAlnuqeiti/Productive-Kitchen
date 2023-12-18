<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kitchen_Details;
use App\Models\Kitchen_Review;
use Illuminate\Http\Request;

class KitchenReviewsController extends Controller
{
    public function index()
    {
        $KitchenReview = Kitchen_Review::get();
        $kitchens = Kitchen_Details::all();
        return view('adminDashboard.allKitchen.KitchenReview', ['KitchenReview'=> $KitchenReview , 'kitchens' => $kitchens]);

    }
}
