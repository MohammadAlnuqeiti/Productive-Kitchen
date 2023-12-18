<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product_Review;
use Illuminate\Http\Request;

class ProductsReviewsController extends Controller
{
    public function index()
    {
        $ProductReview = Product_Review::get();

        return view('adminDashboard.product.ProductReview', compact('ProductReview'));

    }
}
