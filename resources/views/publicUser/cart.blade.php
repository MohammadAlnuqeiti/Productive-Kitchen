@extends('publicUser.layouts.master')


@section('title')
Cart
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}
<style>
.cart-coupon-row{
    text-align :right;
}
.cart-coupon {
    text-align: left;
}
</style>
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
                                <h1 class="section-title white-color">سلة المشتريات</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="{{route('home')}}">الرئيسية</a></li>
                                    <li>السلة</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOPING CART AREA START -->
        <div class="liton__shoping-cart-area mb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <th class="cart-product-remove">حذف</th>
                                        <th class="cart-product-image">الصورة</th>
                                        <th class="cart-product-info">اسم المنتج</th>
                                        <th class="cart-product-price">السعر</th>
                                        <th class="cart-product-quantity">الكمية</th>
                                        <th class="cart-product-subtotal">المجموع</th>
                                    </thead>

                                    <tbody>
                                    <?php $x = 0; ?>
                                    <?php $total_price = 0; ?>
                                    <form action={{ route('user.cart.update') }} method="POST">

                                    @method('PATCH')
                                    @csrf

                                    @forelse ($data as $item)

                                        <tr>
                                            <td class="cart-product-remove"><a href="{{ route('user.cart.destroy', $item['product_id']) }}">x</a></td>
                                            <td class="cart-product-image">
                                                <a href="{{route('user.singleProduct',$item['product_id'])}}"><img src="{{ URL::asset('storage/images/' . $item['product_image']) }}" alt="{{ $item['product_name'] }}"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">{{$item['product_name']}}</a></h4>
                                            </td>
                                            @if ($item['is_sale'] == 0)
                                                <?php $price = $item['product_price']; ?>
                                            @else
                                                <?php $price = $item['product_price_discount']; ?>
                                            @endif
                                            <td class="cart-product-price">{{$price}} JD</td>
                                            <td class="cart-product-quantity">
                                                <div >
                                                <!-- <div class="cart-plus-minus"> -->
                                                    <input type="hidden" value="{{$item['product_id']}}" name="products[{{$x}}][id]" >
                                                    <input type="number" value="{{$item['quantity']}}" name="products[{{$x}}][quantity]" min="1" >
                                                    <!-- <input type="text" value="{{$item['quantity']}}" name="products[{{$x}}][quantity]" class="cart-plus-minus-box"> -->
                                                </div>
                                            </td>
                                            <?php $priceTo = $price * $item['quantity']; ?>
                                            <td class="cart-product-subtotal">{{$priceTo}} JD</td>
                                            <?php $total_price += $priceTo; ?>

                                        </tr>

                                    <?php ++$x ?>
                                    @empty

                                        <tr>

                                            <td class="cart-product-info" colspan="3" style="text-align: center">
                                                <h4>سلة المشتريات فارغة...</h4>
                                            </td>

                                        </tr>
                                    @endforelse
                                    @if(!count($data)==0)

                                            <tr class="cart-coupon-row">
                                                <td>
                                                    <button type="submit" class="btn theme-btn-2 btn-effect-2--">تحديث السلة</button>
                                                </td>
                                                <!-- <td colspan="6">
                                                    <div class="cart-coupon">
                                                        <input type="text" name="cart-coupon" placeholder="Coupon code">
                                                        <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                                                    </div>
                                                </td> -->
                                            </tr>
                                        </form>

                                    @endif

                                    </tbody>
                                </table>
                            </div>
                            <div class="shoping-cart-total mt-50">
                                <h4>إجمالي سلة المشتريات</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>مجموع منتجات السلة</td>
                                            <td>{{ $total_price }} JD</td>
                                        </tr>
                                        <tr>
                                            <td>الضريبة</td>
                                            <td>00.00 JD</td>
                                        </tr>
                                        <tr>
                                            <td><strong>المجموع الكلي</strong></td>
                                            <td><strong>{{ $total_price }} JD</strong></td>
                                            {{ session()->put('total_price', $total_price) }}

                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-wrapper text-right">
                                    <a href="{{route('user.checkout.index')}}" class="theme-btn-1 btn btn-effect-1">اتمام عملية الشراء</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOPING CART AREA END -->


@endsection

@section('script')

@endsection
