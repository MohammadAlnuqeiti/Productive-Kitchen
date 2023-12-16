@extends('publicUser.layouts.master')


@section('title')
Check Out
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('header_top_logo')

<a href="{{route('home')}}"><img src="/userSide/img/logoo.png" alt="Logo"></a>

@endsection

@section('header_top_sticky')

<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black plr--9---">

@endsection

@section('header_top')

<div class="col header-menu-column menu-color-white">

@endsection


@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/userSide/img/bg/9.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                            <h1 class="section-title white-color">إتمام الطلب</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}">الرئيسية</a></li>
                                <li>إتمام الطلب</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <!-- <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                            <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-toggle="collapse">Click here to login</a></h5>
                            <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn_coupon-code-form ltn__form-box">
                                    <p>Please login your accont.</p>
                                    <form action="#" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ltn__name" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item input-item-email ltn__custom-icon">
                                                    <input type="email" name="ltn__email" placeholder="Enter email address">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                        <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                        <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                            <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-toggle="collapse">Click here to enter your code</a></h5>
                            <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                <div class="ltn__coupon-code-form">
                                    <p>If you have a coupon code, please apply it below.</p>
                                    <form action="#" >
                                        <input type="text" name="coupon-code" placeholder="Coupon code">
                                        <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">تفاصيل الفاتورة</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="{{route('user.checkout.store')}}" method="post">
                                    @csrf
                                    <h6>المعلومات الشخصية</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" placeholder="الاسم الاول" value="{{Auth()->user()->first_name}}" name="first_name" class="@error('first_name') is-invalid @enderror" autofocus>
                                                @error('first_name')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text"  placeholder="الاسم الثاني" value="{{Auth()->user()->last_name}}" name="last_name" class="@error('last_name') is-invalid @enderror">
                                                @error('last_name')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" placeholder="الايميل" value="{{Auth()->user()->email}}" name="email" class="@error('email') is-invalid @enderror">
                                                @error('email')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-phone ltn__custom-icon">
                                                <input type="text"  placeholder="رقم الهاتف" value="{{Auth()->user()->phone}}" name="phone" class="@error('phone') is-invalid @enderror">
                                                @error('phone')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__company" placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="ltn__phone" placeholder="Company address (optional)">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>وقت استلام الطلب</h6>
                                            <div class="input-item input-item-date ">
                                                <input type="datetime-local" placeholder="وقت الحجز" name="received_date" class="@error('received_date') is-invalid @enderror">
                                                @error('received_date')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-lg-4 col-md-6">
                                            <h6>Country</h6>
                                            <div class="input-item">
                                                <select class="nice-select">
                                                    <option>Select Country</option>
                                                    <option>Australia</option>
                                                    <option>Canada</option>
                                                    <option>China</option>
                                                    <option>Morocco</option>
                                                    <option>Saudi Arabia</option>
                                                    <option>United Kingdom (UK)</option>
                                                    <option>United States (US)</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-12 col-md-12">
                                            <h6>العنوان</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" placeholder="اسم المنطقة" name="area_name" class="@error('area_name') is-invalid @enderror">
                                                        @error('area_name')
                                                            <div class="error">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" placeholder="رقم المنزل واسم الشارع" name="street_name" class="@error('street_name') is-invalid @enderror">
                                                        @error('street_name')
                                                            <div class="error">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-4 col-md-6">
                                            <h6>Town / City</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="City">
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-4 col-md-6">
                                            <h6>State </h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Zip</h6>
                                            <div class="input-item">
                                                <input type="text" placeholder="Zip">
                                            </div>
                                        </div> -->
                                    </div>
                                    <!-- <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p> -->
                                    <h6>ملاحظات (اختياري)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea placeholder="ملاحظات حول طلبك ، على سبيل المثال ملاحظات خاصة للتسليم." name="notes"></textarea>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">طريقة الدفع</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <h5 class="ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-2" aria-expanded="true">
                                    الدفع عند الاستلام
                                </h5>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>ادفع نقدا عند الاستلام.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <!-- <div class="card">
                                <h5 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-3" aria-expanded="false" >
                                    PayPal <img src="/userSide/img/icons/payment-3.png" alt="#">
                                </h5>
                                <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>سيتم استخدام بياناتك الشخصية لمعالجة طلبك ودعم تجربتك في جميع أنحاء هذا الموقع ولأغراض أخرى موصوفة في سياسة الخصوصية الخاصة بنا.</p>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">تأكيد الطلب</button>

                    </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">طلبك</h4>
                        <table class="table">
                            <tbody>
                                <?php       $cart = session()->get('cart'); ?>
                                @foreach($cart as $value)
                                    <tr>
                                        <td>{{$value['name']}} <strong>× {{$value['quantity']}}</strong></td>
                                        <td>{{$value['quantity'] * $value['price']}} JD</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td><strong>المجموع</strong></td>
                                    <td><strong>{{session('total_price')}} JD</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
    
@endsection

@section('script')

@endsection
