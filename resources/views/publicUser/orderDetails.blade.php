@extends('publicUser.layouts.master')


@section('title')

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
   <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/userSide/img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                        <h1 class="section-title white-color">تفاصيل الطلب</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li><a href="{{route('user.profile.index')}}">الملف الشخصي</a></li>
                            <li>تفاصيل الطلب</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- BREADCRUMB AREA END -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>رقم الطلب :</th>
                            <td>{{$order_no->id}}</td>
                        </tr>
                        <tr>
                            <th>حالة الطلب :</th>
                            @if ($order_no->status == 'pending')
                                <td>قيد المعالجة</td>
                            @elseif ($order_no->status == 'accepted')
                                <td>تمت الموافقة</td>
                            @else
                                <td>تم الرفض</td>
                            @endif
                        </tr>
                        <tr>
                            <th>ملاحظات من المطعم :</th>
                            @if ($order_no->status == 'pending')
                                <td>---</td>
                            @else

                                @if($order_no->message == null)
                                    <td>لا يوجد ملاحظات حالياً</td>
                                @else
                                    <td>{{$order_no->message}}</td>
                                @endif

                            @endif
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم المنتج</th>
                            <th>الكمية</th>
                            <th>السعر</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @forelse ($orders as $order)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$order->product->name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}} JD</td>
                            </tr>
                            <?php ++$i ?>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('model_area')


@endsection

@section('script')

@endsection
