@extends('publicUser.layouts.master')


@section('title')
Product Details
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}
    <style>
        .error {
            color: red;
            margin-top: -30px;
            margin-right: 10px;
        }
        .failed-msg,
    .info-msg,
    .success-msg,
    .warning-msg,
    .error-msg {
      margin: 10px 0;
      padding: 9px;
      border-radius: 3px 3px 3px 3px;
      height: 47px;
    }
    
    .success-msg {
  
        color: #270;
        background-color: #DFF2BF;
        text-align: center;
    
    }
    .failed-msg{
  font-size: 18px;
        color: rgb(198, 53, 21);
        background-color: #fda6a6;
        text-align: center;
    
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
<?php $image = $data['image'] ?>
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" style="background-image: url('{{ URL::asset("storage/images/$image") }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                        <h1 class="section-title white-color">{{$data['name']}}</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                        <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li>تفاصيل المنتج</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
    @if(session()->get('success'))
        <div class="success-msg">
            <i class="fa fa-check"></i>

            {{ session()->get('success') }}
        </div>
    @endif
<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ltn__shop-details-inner mb-60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                <?php $image = $data['image'] ?>
                                    <div class="single-large-img">
                                            <img src="{{URL::asset("storage/images/$image")}}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">

                                <h3>{{$data['name']}}</h3>
                                <div class="product-price">
                                @if($data['is_sale'] == 1)
                                    <span>JD {{$data['price_discount']}} </span>
                                    <del>JD {{$data['price']}} </del>
                                @else
                                    <span>JD {{$data['price']}} </span>
                                @endif
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1">
                                    <ul>
                                        <li>
                                            <strong>صنف المنتج:</strong>
                                            <span>
                                                <a href="#">{{$data['category']}}</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li>وصف المنتتج:</li>
                                        <li>{{$data['short_description']}}</li>
                                    </ul>
                                </div>
                                @if ($data['is_active'] == 1)
                                    <hr>
                                    <div class="ltn__social-media">
                                        @if($data['duration_of_product_recommendation'] > 0)
                                            <ul>
                                                <li>ملاحظة:</li>
                                                <li style="color:red">يجب الحجز قبل ب {{$data['duration_of_product_recommendation']}}  ساعة</li>
                                            </ul>
                                        @else
                                            <ul>
                                                <li style="color:#80B500">هذا المنتج لا يتطلب للحجز المسبق.</li>
                                            </ul>
                                        @endif
                                        
                                    </div>
                                @endif
                                <div class="ltn__product-details-menu-2">
                                <hr>
                                @if ($data['is_active'] == 1)
                                    @if(!$in_the_basket)
                                        <form action={{route("user.cart.add",$data['id'])}} method="post">
                                            @method('HEAD')
                                            @csrf
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="1" min="1" name="quantity" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <button type="submit" class="theme-btn-1 btn btn-effect-1"> <i class="fas fa-shopping-cart"></i><span>اضافة الى السلة</span></button>    
                                                </li>
                                            </ul>
                                        </form>
                                    @else

                                        <ul style="text-align:center">
                                            <li>
                                                <a href="{{route('user.cart')}}"><button type="button" class="theme-btn-1 btn btn-effect-1 ">الذهاب الى سلة المشتريات</button></a>
                                            </li>
                                        </ul>

                                    @endif
                                @else
                                    <ul style="text-align:center">
                                        <li>
                                            <button type="button" class="theme-btn-1 btn btn-effect-1 ">هذا المنتج غير متاح حالياً</button>    
                                        </li>
                                    </ul>

                                @endif
                                </div>

                   
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab Start -->
                <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-toggle="tab" href="#liton_tab_details_1_1">الوصف</a>
                            <a data-toggle="tab" href="#liton_tab_details_1_2" class="">التقييمات</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">شرح مفصل عن المنتج.</h4>
                                <p>{{$data['long_description']}}.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_2">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">تعليقات الزبائن</h4>
       

                                <br>
                                <!-- comment-area -->
                                <div class="ltn__comment-area mb-30">
                                    <div class="ltn__comment-inner">
                                        <ul>
                                            @forelse ($reviews as $review)
                                                <li>
                                                    <div class="ltn__comment-item clearfix">
                                                        <div class="ltn__commenter-img">
                                                        <?php $imageUser = $review->user->image ?>
                                                            <img src="{{URL::asset("storage/images/$imageUser")}}" alt="Image" width="100px" height="100px">
                                                        </div>
                                                        <div class="ltn__commenter-comment">
                                                            <h6>{{$review->user->first_name}} {{$review->user->last_name}}</h6>
                                                            <br>
                                                            <!-- <div class="product-ratting">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                                </ul>
                                                            </div> -->
                                                            <p>{{$review->comment}}.</p>
                                                            <span class="ltn__comment-reply-btn">{{date('d-m-Y', strtotime($review->created_at))}}</span>
                                                            <!-- <span class="ltn__comment-reply-btn">September 3, 2020</span> -->
                                                        </div>
                                                    </div>
                                                </li>
                                            @empty

                                            <li>
                                                <p style="text-align:center">لا يوجد تعليقات</p>

                                            </li>

                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                                @if(Auth::user())

                                    <!-- comment-reply -->
                                    <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                        <form action="{{route('user.productReview')}}" method="post" >
                                            @csrf
                                                <h4 class="title-2">إضافة تعليق</h4>

                                                <div class="input-item input-item-textarea ltn__custom-icon">
                                                    <textarea placeholder="أكتب تعليقك...." name="comment" class="@error('comment') is-invalid @enderror"></textarea>
                                                    @error('comment')
                                                        <div class="error">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <input type="hidden" value="{{$data['id']}}" name="product_id">
                                                </div>

                                                <div class="btn-wrapper">
                                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">إرسال</button>
                                                </div>
                                        </form>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab End -->
            </div>
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">منتجات قد تهمك</h4>
                        <ul>
                            @forelse ($relatedProduct as $product)

                                @if($product->id != $data['id'])

                                    <li>
                                        <div class="top-rated-product-item clearfix">
                                            <div class="top-rated-product-img">
                                            <?php $imageProduct = $product->image ?>

                                                <a href="{{route('user.singleProduct',$product->id)}}"><img src="{{URL::asset("storage/images/$imageProduct")}}" alt="{{$product->name}}"></a>
                                            </div>
                                            <div class="top-rated-product-info">
                                                <h6><a href="{{route('user.singleProduct',$product->id)}}">{{$product->name}}</a></h6>
                                                <div class="product-price">
                                                    @if($product->is_sale == 1)
                                                        <span>JD {{$product->price_discount}} </span>
                                                        <del>JD {{$product->price}} </del>
                                                    @else
                                                        <span>JD {{$product->price}} </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                @endif

                            @empty 
                                <p style="text-align:center">لا يوجد منتجات</p>
                            @endforelse  
                        </ul>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{URL::asset("storage/images/$image")}}" alt="image"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

@if(session()->get('failed'))
                <div class="failed-msg">
                    <i class="fa fa-check"></i>

                    {{ session()->get('failed') }}
                </div>
@endif
<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h1 class="section-title">المنتجات ذات العلاقة<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                        <!-- ltn__product-item -->
                        @forelse ($relatedProduct as $product)
                            @if($product->id != $data['id'])
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <?php $image = $product->image ?>
                                            <img src="{{URL::asset("storage/images/$image")}}" alt="{{$product->name}}" width="275px" height="275px">
                                            @if($product->is_sale == 1)
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badge">{{$product->discount}}%</li>
                                                </ul>
                                            </div>
                                            @endif
                                            <div class="product-hover-action">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('user.singleProduct',$product->id)}}" >
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <form action={{route("user.cart.add",$product->id)}} method="post">
                                                                @method('HEAD')
                                                                @csrf
                                                                    <input type="hidden" name="quantity" value="1"/>
                                                                    <button style="border:none;background:none">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                    </button>
                                                            </form>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h2 class="product-title"><a href="{{route('user.singleProduct',$product->id)}}">{{$product->name}}</a></h2>
                                            @if($product->duration_of_product_recommendation > 0)
                                                <h3 class="product-title" style="margin:0;color:red">يجب الحجز قبل ب {{$product->duration_of_product_recommendation}}  ساعة</h2>
                                            @else
                                                <h3 class="product-title" style="margin:0;color:red">لا يتطلب للحجز المسبق </h2>
                                            @endif
                                            <div class="product-price">
                                                @if($product->is_sale == 1)
                                                    <span>JD {{$product->price_discount}} </span>
                                                    <del>JD {{$product->price}} </del>
                                                @else
                                                    <span>JD {{$product->price}} </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty 
                             <p style="text-align:center">لا يوجد منتجات</p>
                        @endforelse            
                        <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

@endsection

@section('model_area')

 <!-- MODAL AREA START (Quick View Modal) -->
 <div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img src="/userSide/img/product/4.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                            </ul>
                                        </div>
                                        <h3>Vegetables Juices</h3>
                                        <div class="product-price">
                                            <span>$149.00</span>
                                            <del>$165.00</del>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1">
                                            <ul>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span>
                                                        <a href="#">Parts</a>
                                                        <a href="#">Car</a>
                                                        <a href="#">Seat</a>
                                                        <a href="#">Cover</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                        <i class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-3">
                                            <ul>
                                                <li>
                                                    <a href="#" class="" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                        <i class="far fa-heart"></i>
                                                        <span>Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="" title="Compare" data-toggle="modal" data-target="#quick_view_modal">
                                                        <i class="fas fa-exchange-alt"></i>
                                                        <span>Compare</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li>Share:</li>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="/userSide/img/product/1.png" alt="#">
                                    </div>
                                     <div class="modal-product-info">
                                        <h5><a href="product-details.html">Vegetables Juices</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                        <div class="btn-wrapper">
                                            <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                            <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                        </div>
                                     </div>
                                     <!-- additional-info -->
                                     <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="/userSide/img/icons/payment.png" alt="#">
                                        </div>
                                     </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Wishlist Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <div class="ltn__quick-view-modal-inner">
                         <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="/userSide/img/product/7.png" alt="#">
                                    </div>
                                     <div class="modal-product-info">
                                        <h5><a href="product-details.html">Vegetables Juices</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                        <div class="btn-wrapper">
                                            <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                        </div>
                                     </div>
                                     <!-- additional-info -->
                                     <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="/userSide/img/icons/payment.png" alt="#">
                                        </div>
                                     </div>
                                </div>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

@endsection

@section('script')

@endsection
