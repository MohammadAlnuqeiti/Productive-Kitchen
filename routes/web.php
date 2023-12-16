<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\KitchenController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Kitchen\KitchenController as KitchenKitchenController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\Kitchen\ProfileController as KitchenProfileController;
use App\Http\Controllers\Kitchen\ProductController as KitchenProductController;
use App\Http\Controllers\Kitchen\DetailsKitchenController;
use App\Http\Controllers\Kitchen\DiscountKitchenController;
use App\Http\Controllers\Kitchen\ReceivingProductController;
use App\Http\Controllers\Kitchen\EditStatusKitchenController;
use App\Http\Controllers\Kitchen\EditKitchenDetailsController;
use App\Http\Controllers\Kitchen\KitchenOrderController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\KitchenDetailsController;
use App\Http\Controllers\User\KitchenReviewController;
use App\Http\Controllers\User\SingleProductController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\SearchProductController;
use App\Http\Controllers\User\CartUserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\OrderDetailsController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route home user side

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// login admin

Route::get('/admin-login', function () {
    return view('adminDashboard.login');
})->name('AdminLogin');

Route::post('/CheckLogin' , [LoginAdminController::class,'login'])->name('CheckLogin');
Route::post('/AdminLogout' , [LoginAdminController::class,'destroy'])->name('AdminLogout');
Route::get('/AdminLogout' , [LoginAdminController::class,'destroy'])->name('AdminLogout');

// route ui auth

Auth::routes();

// routes admin dashboard

Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('/allAdmin',[AdminController::class,'admin'])->name('allAdmin');
    Route::get('/createAdmin',[AdminController::class,'create'])->name('createAdmin');
    Route::post('/createAdmin/store',[AdminController::class,'store'])->name('store.admin');
    Route::resource('/allUsers',UsersController::class);
    Route::resource('/categories',CategoryController::class);
    Route::resource('/profile',ProfileController::class);
    Route::resource('/kitchens',KitchenController::class);
    Route::resource('/products',ProductAdminController::class);
    Route::get('/messages' ,[ContactController::class,'show'])->name('messages');
    Route::get('/commentsProduct', function () {
        return view('adminDashboard.product.comments');
    })->name('commentsProduct');
    Route::get('/orders', function () {
        return view('adminDashboard.orders.show');
    })->name('orders');


});

//  routse user side

Route::prefix('user')->name('user.')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/about-us', function () {
        $allProducts = Product::all();

        return view('publicUser.aboutUs' , [ 'allProducts' => $allProducts ]);
    })->name('about');
    Route::get('/contactUs',[ContactController::class,'index'])->name('contact');
    Route::post('/contactUs/create',[ContactController::class,'store'])->name('contact.create');
    Route::resource('/profile',ProfileUserController::class);
    Route::get('/kitchenDetails/{id}',[KitchenDetailsController::class,'show'])->name('kitchenDetails');
    Route::post('/KitchenReview',[KitchenReviewController::class,'store'])->name('KitchenReview');
    Route::get('/singleProduct/{id}',[SingleProductController::class,'show'])->name('singleProduct');
    Route::post('/ProductReview',[SingleProductController::class,'createComment'])->name('productReview');
    Route::get('/shop',[ShopController::class,'index'])->name('shop');
    Route::get('/shop/{id}',[ShopController::class,'showCategory'])->name('shopByCategory');
    Route::post('/searshProduct',[SearchProductController::class,'search'])->name('searchProduct');
    Route::get('/searshProduct',[SearchProductController::class,'search'])->name('searchProduct');
    Route::get('/cartt',[CartUserController::class,'index'])->name('cart');
    Route::get('/cartdestroy/{id}',[CartUserController::class,'destroy'])->name('cart.destroy');
    Route::get('/addcart/{id}',[CartUserController::class,'addToCart'])->name('cart.add');
    Route::patch('/cart/update',[CartUserController::class,'update'])->name('cart.update');
    Route::resource('/checkout',CheckoutController::class);
    Route::get('/profile/order/{id}',[OrderDetailsController::class,'show'])->name('orderDetails');

    Route::get('/products/{userId}', [UserController::class, 'products'])->name('Products');

    Route::get('/register', function () {
        $allProducts = Product::all();

        return view('publicUser.register' , [ 'allProducts' => $allProducts ]);
    })->name('register');
    Route::get('/login', function () {
        $allProducts = Product::all();

        return view('publicUser.login' , [ 'allProducts' => $allProducts ]);
    })->name('login');
    Route::get('/error', function () {
        return view('publicUser.error404');
    });
    Route::get('/faq', function () {

        return view('publicUser.faq');
    })->name('faq');

    Route::get('/privacyPolicy', function () {
        return view('publicUser.privacyPolicy');
    })->name('privacyPolicy');

    Route::get('/termsAndConditions', function () {
        return view('publicUser.termsAndConditions');
    })->name('termsAndConditions');


});

// routes kitchen dashboard

Route::middleware(['auth'])->prefix('kitchen')->name('kitchen.')->group(function () {

    Route::get('/',[KitchenKitchenController::class,'index'])->name('index');
    Route::resource('/products',KitchenProductController::class);
    Route::resource('/profile',KitchenProfileController::class);
    Route::resource('/details',DetailsKitchenController::class);
    Route::resource('/orders',KitchenOrderController::class);
    Route::resource('/discount',DiscountKitchenController::class);
    Route::resource('/receivingProduct',ReceivingProductController::class);
    Route::put('editStatus/{id}',[EditStatusKitchenController::class , 'open'])->name('open');
    Route::put('editStatusClose/{id}',[EditStatusKitchenController::class , 'close'])->name('close');
    Route::put('editDetails/{id}',[EditKitchenDetailsController::class,'update'])->name('editDetails');


});

