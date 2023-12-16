@extends('publicUser.layouts.master')


@section('title')
Profile
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}
<style>
.alert-danger{
    margin-top:-30px
}
.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 20px;
  border-radius: 3px 3px 3px 3px;
}

.success-msg {
  color: #270;
  background-color: #DFF2BF;
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
   <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/userSide/img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                        <h1 class="section-title white-color">الملف الشخصي</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li>الملف الشخصي</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
    @if(session()->get('successCheckout'))
        <div class="success-msg">
            <i class="fa fa-check"></i>

            {{ session()->get('successCheckout') }}
        </div>
    @endif
<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- PRODUCT TAB AREA START -->
                <div class="ltn__product-tab-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ltn__tab-menu-list mb-50">
                                    <div class="nav">
                                        <a class="active show" data-toggle="tab" href="#liton_tab_1_1">الملف الشخصي <i class="fas fa-home"></i></a>
                                        <a data-toggle="tab" href="#liton_tab_1_2">الطلبات <i class="fas fa-file-alt"></i></a>
                                        <a data-toggle="tab" href="#liton_tab_1_5">تفاصيل الحساب <i class="fas fa-user"></i></a>
                                        <a href="{{ route('logout') }}" title="تسجيل الخروج" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج <i class="fas fa-sign-out-alt"></i></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="liton_tab_1_1">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <p>أهلا {{Auth()->user()->first_name}}</p>
                                            <p>من لوحة معلومات حسابك ، يمكنك عرض طلباتك الأخيرة ، وإدارة عناوين الشحن والفوترة ، وتعديل كلمة المرور وتفاصيل الحساب.</p>
                                        </div>
                                    </div>

              

                                    <div class="tab-pane fade" id="liton_tab_1_2">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>رقم الطلب</th>
                                                            <th>التاريخ</th>
                                                            <th>حالة الطلب</th>
                                                            <th>مجموع السعر</th>
                                                            <th>وقت استلام الطلب</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($orders as $order)
                                                            <tr>
                                                                <td>{{$order->id}}</td>
                                                                <td>{{$order->created_at}}</td>
                                                                @if ($order->status == 'pending')
                                                                    <td>قيد المعالجة</td>
                                                                @elseif ($order->status == 'accepted')
                                                                    <td>تمت الموافقة</td>
                                                                @else
                                                                    <td>تم الرفض</td>
                                                                @endif
                                                                <td>{{$order->total_price}} JD</td>
                                                                <td>{{$order->checkout->received_date}}</td>
                                                                <td><a href="{{route('user.orderDetails',$order->id)}}">تفاصيل</a></td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="6" style="text-align: center">لا يوجد طلبات تمت شراؤها</td>
                                                            </tr>
                                                            <!-- <div class="tab-pane fade" id="liton_tab_1_2" role="tabpanel">
                                                                <div class="bo-all-1 bocl15 flex-w flex-sb-m p-rl-30 p-tb-10 p-rl-15-ssm">
                                                                    <div class="flex-t p-tb-8 m-r-30">
                                                                        <img class="m-t-6 m-r-10" src="/userSide/images/icons/icon-list.png" alt="IMG">
                                                                        <span class="size-w-53 txt-s-101 cl6">
                                                                            No order has been made yet.
                                                                        </span>
                                                                    </div>

                                                                    <a href="shop-sidebar-grid.html" class="flex-c-m txt-s-105 cl0 bg10 size-a-42 hov-btn2 trans-04 p-rl-10 m-tb-8">
                                                                        go shop
                                                                    </a>
                                                                </div>
                                                            </div> -->
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_5">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            @if(session()->get('success'))
                                                <p style="background-color:#DFF2BF ; color:#270">  {{ session()->get('success') }} </p>
                                            @endif
                                            <!-- <p>The following addresses will be used on the checkout page by default.</p> -->
                                            <div class="ltn__form-box">
                                                <form action="{{route('user.profile.update',Auth()->user()->id)}}" method="post" enctype="multipart/form-data" >
                                                    @method('PUT')
                                                    @csrf

                                                    <div class="row mb-50">
                                                        <div class="col-md-6">
                                                            <label>الاسم الاول:</label>
                                                            <input type="text" name="first_name" value="{{Auth()->user()->first_name}}" class="@error('first_name') is-invalid @enderror">
                                                                @error('first_name')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>الاسم الثاني:</label>
                                                                <input type="text" name="last_name" value="{{Auth()->user()->last_name}}" class="@error('last_name') is-invalid @enderror">
                                                                @error('last_name')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>رقم الهاتف:</label>
                                                                <input type="text" name="phone" value="{{Auth()->user()->phone}}" class="@error('phone') is-invalid @enderror">
                                                                @error('phone')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>الايميل:</label>
                                                                <input type="email" name="email" placeholder="example@example.com" value="{{Auth()->user()->email}}" class="@error('email') is-invalid @enderror">
                                                                @error('email')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <fieldset>
                                                            <legend>تغيير الباسوورد</legend>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>كلمة المرور الحالية (اتركها فارغة لتركها دون تغيير):</label>
                                                                    <input type="password" name="old_password"  class="@error('old_password') is-invalid @enderror">
                                                                        @error('old_password')
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                        @if(session()->get('error'))
                                                                            <div class="alert alert-danger">{{ session()->get('error') }} </div>
                                                                        @endif
                                                                    <label>كلمة مرور جديدة (اتركها فارغة لتركها دون تغيير):</label>
                                                                    <input type="password" name="new_password" name="new_password" class="@error('new_password') is-invalid @enderror">
                                                                        @error('new_password')
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    <label>تأكيد كلمة المرور الجديدة:</label>
                                                                    <input type="password" name="confirm_password" class="@error('confirm_password') is-invalid @enderror">
                                                                        @error('confirm_password')
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT TAB AREA END -->
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->

@endsection

@section('script')

@endsection
