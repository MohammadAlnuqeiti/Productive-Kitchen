@extends('publicUser.layouts.master')


@section('title')
Shop
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}
<style>
.pagination{
    display: flex;
    margin: auto ;
    justify-content:center;

}
/* .pagination nav{
    display: flex;
    flex-direction: row
} */
/* .pagination.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
} */

/* .pagination  ul {
    margin: 0;
    padding: 0;
} */
.pagination li {
    list-style: none;
}
.pagination li {
    height: 50px;
    width: 50px;
    line-height: 46px;
    display: block;
    font-weight: 700;
    display: inline-block;
    margin-left: 10px;
}
.page-item.active .page-link {
    background-color: var(--ltn__secondary-color);
    border-color: var(--ltn__secondary-color);
    color: var(--white);
}
.page-item:hover .page-link {
    background-color: var(--ltn__secondary-color);
    border-color: var(--ltn__secondary-color);
    color: var(--white);
}
.page-link {
    height: 50px;
    width: 50px;
    line-height: 46px;
    text-align: center;
    display: block;
    font-weight: 900;
    color:black;
    padding:0;
}
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
   <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="/userSide/img/bg/9.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                        <h1 class="section-title white-color">جميع منتجاتنا</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li>جميع منتجاتنا</li>
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

@if(session()->get('failed'))
        <div class="failed-msg">
            <i class="fa fa-check"></i>

            {{ session()->get('failed') }}
        </div>
@endif
<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2 mb-120">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                    <a data-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                        <!-- <li>
                           <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </li> -->
                        <li>
                            
                            <div class="showing-product-number text-right">
                                <!-- @if(count($products) <= 9) -->
                                <!-- @endif -->
                                @if(!$products->hasPages())
                                    <span>يعرض {{count($products)}} من المنتجات</span>
                                @else
                                    <span>يعرض 9 من المنتجات من أصل {{$products->total()}}</span>
                                @endif
                                </div>
                            </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach ($products as $product)
                                    <div class="col-xl-4 col-sm-6 col-6">
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
                                @endforeach
                                <!--  -->


                            </div>
                        </div>
                    </div>

                    
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach ($products as $product)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
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
                                                <div class="product-brief">
                                                    <p>{{$product->short_description}}</p>
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
                                        </div>
                                    </div>
                                @endforeach


                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination">

                    {{$products->links()}}

                </div>
                
            </div>
            <div class="col-lg-4  mb-120">
                <aside class="sidebar ltn__shop-sidebar">
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">التسوق حسب فئات المنتجات</h4>
                        <ul>
                            <li><a href="{{route('user.shop')}}">كل المنتجات <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            @foreach ($category as $value)

                                <li><a href="{{route('user.shopByCategory',$value->id)}}">{{strtoupper($value->name)}} <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">البحث في المنتجات</h4>
                        <form action="{{ route('user.searchProduct') }}" method="post" id="form" class="form">
                            @csrf
                            <input type="search" name="search" placeholder="ابحث في الكلمات الرئيسية...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        
                        @if (isset($message) && $message)
                            <div class="not-found-message">{{ $message }}</div>
                        @endif
                    </div>
                    
                    
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="/userSide/img/shop_design.png" alt="#"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->

@endsection

@section('model_area')



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


    
@endsection

@section('script')

@endsection
