@extends('publicUser.layouts.master')


@section('title')
Home
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection
@section('header_top_logo')

<a href="{{route('home')}}"><img src="/userSide/img/logoo.png" alt="Logo"></a>

@endsection

@section('header_top_sticky')

<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white plr--9---">

@endsection

@section('header_top')

<div class="col header-menu-column menu-color-white---">

@endsection



@section('content')
	    <!-- SLIDER AREA START (slider-3) -->
        <div class="ltn__slider-area ltn__slider-3  section-bg-1">
            <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                    <div class="ltn__slide-item-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <h6 class="slide-sub-title animated"><img src="/userSide/img/icons/icon-img/1.png" alt="#">أشهى المأكولات المصنوعة بأيدي ماهرة</h6>
                                            <h1 class="slide-title animated ">موقع "أيادي العقبة" يرحب بكم</h1>
                                            <div class="slide-brief animated ">
                                                <p> الموقع الأول من نوعه للمطابخ الانتاجية في العقبة</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">تعرف أكثر على المطابخ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item-img">
                                        <img src="/userSide/img/slider/23.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                    <div class="ltn__slide-item-inner  text-right">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title animated"><img src="/userSide/img/icons/icon-img/1.png" alt="#">منتجات مصنوعة بكل حب</h6>
                                            <h1 class="slide-title animated ">معكم في جميع مناسباتكم</h1>
                                            <div class="slide-brief animated">
                                                <p>خيارات منوعة من أشهى المأكولات و المنتجات المصنوعة باتقان تلبي جميع الأذواق</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">تسوق أفضل المنتجات</a>
                                                <a href="about.html" class="btn btn-transparent btn-effect-3 text-uppercase">تعرف علينا أكثر</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item-img slide-img-left">
                                        {{-- <img src="/userSide/img/slider/21.png" alt="#"> --}}
                                        <img src="/userSide/img/slider/21.jpeg" alt="#">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- SLIDER AREA END -->

        <!-- BANNER AREA START -->
        <div class="ltn__banner-area mt-120 mt--90 d-none">
            <div class="container">
                <div class="row ltn__custom-gutter--- justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="/userSide/img/banner/1.jpg" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="/userSide/img/banner/2.jpg" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="/userSide/img/banner/1.jpg" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER AREA END -->



        <!-- BANNER AREA START -->
        <div class="ltn__banner-area mt-120">
            <div class="container">
                <div class="row ltn__custom-gutter--- justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="/userSide/img/banner/13.jpeg" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img src="/userSide/img/banner/14.jpg" alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ltn__banner-item">
                                    <div class="ltn__banner-img">
                                        <a href="shop.html"><img src="/userSide/img/banner/15.jpg" alt="Banner Image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER AREA END -->

          <!-- BLOG AREA START (blog-3) -->
        <div class="ltn__blog-area pt-115 pb-70" id="kithen">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title white-color---">المطابخ</h1>
                        </div>
                    </div>
                </div>
                <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">

                @foreach ($kitchens as $kitchen)
                    <!-- Blog Item -->
                    <div class="col-lg-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                            <?php $image = $kitchen->image ?>
                           <img src="{{URL::asset("storage/images/$image")}}" alt="{{$kitchen->name}}" width="800px" height="250px">
                            </div>
                            <div class="ltn__blog-brief">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <!-- <li class="ltn__blog-author">
                                            <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                        </li> -->
                                        <li class="ltn__blog-tags">
                                         <i class="fas fa-tags"></i>طعام وشراب
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="ltn__blog-title"><a href="{{route('user.kitchenDetails',$kitchen->user_id)}}">{{$kitchen->kitchen_name}}</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <div class="ltn__blog-meta">
                                        <?php $i = 0 ?>
                                        @foreach ($products as $product)
                                            @if ($product->user_id == $kitchen->user_id)

                                            <?php ++$i?>

                                            @endif
                                        @endforeach
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>عدد المنتجات :  {{$i}}</li>
                                        </ul>
                                    </div>
                                    <div class="ltn__blog-btn">
                                        <a href="{{route('user.kitchenDetails',$kitchen->user_id)}}">عرض المتجر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Blog Item -->
                    <!-- <div class="col-lg-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="blog-details.html"><img src="/userSide/img/blog/2.jpg" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                        </li>
                                        <li class="ltn__blog-tags">
                                            <a href="#"><i class="fas fa-tags"></i>Services</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="ltn__blog-title"><a href="blog-details.html">How and when to replace brake rotors</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="ltn__blog-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Blog Item -->
                    <!-- <div class="col-lg-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="blog-details.html"><img src="/userSide/img/blog/3.jpg" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                        </li>
                                        <li class="ltn__blog-tags">
                                            <a href="#"><i class="fas fa-tags"></i>Services</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="ltn__blog-title"><a href="blog-details.html">Elenance, Servicing & Repairs</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>August 22, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="ltn__blog-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Blog Item -->
                    <!-- <div class="col-lg-12">
                        <div class="ltn__blog-item ltn__blog-item-3">
                            <div class="ltn__blog-img">
                                <a href="blog-details.html"><img src="/userSide/img/blog/4.jpg" alt="#"></a>
                            </div>
                            <div class="ltn__blog-brief">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-author">
                                            <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                        </li>
                                        <li class="ltn__blog-tags">
                                            <a href="#"><i class="fas fa-tags"></i>Services</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="ltn__blog-title"><a href="blog-details.html">Healthiest Vegetables on Earth</a></h3>
                                <div class="ltn__blog-meta-btn">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                        </ul>
                                    </div>
                                    <div class="ltn__blog-btn">
                                        <a href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- BLOG AREA END -->

        <!-- PRODUCT TAB AREA START (product-item-3) -->
        {{-- <div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">منتجاتنا</h1>
                        </div>
                        <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                            <div class="nav">
                                <a class="active show" data-toggle="tab" href="#liton_tab_3_1">أطعمة ومشروبات</a>
                                <a data-toggle="tab" href="#liton_tab_3_2" class="">خضروات</a>
                                <a data-toggle="tab" href="#liton_tab_3_3" class="">الأطعمة المجففة</a>
                                <a data-toggle="tab" href="#liton_tab_3_4" class="">كعكة الخبز</a>
                                <a data-toggle="tab" href="#liton_tab_3_5" class="">لحم سمك</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_3_1">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/12.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/8.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/13.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/9.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/14.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/10.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_2">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/16.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/10.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/9.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/14.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/8.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/13.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/10.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_3">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/12.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/8.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/9.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/14.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/10.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_4">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/3.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/5.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/2.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/16.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/14.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/14.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/10.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_5">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/13.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/5.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/9.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/14.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/12.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                    <div class="product-price">
                                                        <span>$78.00</span>
                                                        <del>$85.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/10.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                    <div class="product-price">
                                                        <span>$75.00</span>
                                                        <del>$92.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/15.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/6.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/7.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">New</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                    <div class="product-price">
                                                        <span>$150.00</span>
                                                        <del>$180.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="product-details.html"><img src="/userSide/img/product/11.png" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="product-details.html">Carrots Group Scal</a></h2>
                                                    <div class="product-price">
                                                        <span>$32.00</span>
                                                        <del>$46.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- PRODUCT TAB AREA END -->

        <!-- COUNTDOWN AREA START -->
        {{-- <div class="ltn__call-to-action-area ltn__call-to-action-4 section-bg-1 pt-110 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="/userSide/img/banner/11.png" alt="#">
                    </div>
                    <div class="col-lg-7">
                        <div class="call-to-action-inner call-to-action-inner-4 text-color-white--- text-center---">
                            <div class="section-title-area ltn__section-title-2 text-center---">
                                <h6 class="ltn__secondary-color">اليوم عروض ساخنة</h6>
                                <h1 class="section-title">العسل الأصلي <br>  باقة الكومبو</h1>
                            </div>
                            <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2021/06/25"></div>
                            <div class="btn-wrapper animated">
                                <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">تسوق الآن</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- COUNTDOWN AREA END -->

        <!-- PRODUCT AREA START (product-item-3) -->
        <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title">منتجات عليها خصم</h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                    @foreach ($products as $product)
                        {{-- @if ($product->is_Feature) just put this instead this @if ($product->is_sale) to display"المنتجات المميزة"--}}
                        @if ($product->is_sale)
                            <!-- ltn__product-item -->
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="ltn__product-item ltn__product-item-3 text-left">
                                    <div class="product-img">
                                        <?php $image = $product->image ?>
                                        <img src="{{URL::asset("storage/images/$image")}}" alt="{{$product->name}}" width="800px" height="250px">
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badge">خصم</li>
                                            </ul>
                                        </div>
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
                                        <h2 class="product-title"><a href="{{route('user.singleProduct',$product->id)}}">{{ $product->name }}</a></h2>
                                        <div class="product-price">
                                            <span>{{ $product->price }} د.أ</span>
                                            <del>{{ $product->price_discount }} د.أ</del>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ltn__product-item -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>


        <!-- PRODUCT AREA END -->

        <!-- VIDEO AREA START -->
        {{-- <div class="ltn__video-popup-area ltn__video-popup-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-10-- bg-image" data-bg="/userSide/img/bg/15.jpg">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- VIDEO AREA END -->

        <!-- TESTIMONIAL AREA START (testimonial-4) -->
        <div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h6 class="section-subtitle ltn__secondary-color">//  التوصيات</h6>
                            <h1 class="section-title">آراء العملاء<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="/userSide/img/testimonial/6.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="/userSide/img/testimonial/7.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="/userSide/img/testimonial/1.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="/userSide/img/testimonial/2.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="/userSide/img/testimonial/5.jpg" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <h4>Rosalina D. William</h4>
                                <h6>Founder</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>

        {{-- <div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h6 class="section-subtitle ltn__secondary-color">//  التوصيات</h6>
                            <h1 class="section-title">آراء العملاء<span>.</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                    @foreach($reviews as $review)
                    <div class="col-lg-12">
                        <div class="ltn__testimonial-item ltn__testimonial-item-4">
                            <div class="ltn__testimoni-img">
                                <img src="/userSide/img/testimonial/{{ $review->image }}" alt="#">
                            </div>
                            <div class="ltn__testimoni-info">
                                <p>{{ $review->comment }}</p>
                                <h4>{{ $review->name }}</h4>
                                <h6>{{ $review->position }}</h6>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
         --}}
        <!-- TESTIMONIAL AREA END -->


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
                                         <div class="additional-info d-none---">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use (LoveBroccoli) discount code at checkout</p>
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
    {{-- <div class="ltn__modal-area ltn__add-to-cart-modal-area">
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
    </div> --}}
    <!-- MODAL AREA END -->
@endsection

@section('script')

@endsection
