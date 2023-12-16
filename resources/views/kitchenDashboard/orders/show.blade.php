@extends('kitchenDashboard.layouts.master')


@section('title')
Orders
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
كافة الطلبات
@endsection

@section('title_page1')

@endsection

@section('title_page2')
كافة الطلبات
@endsection

@section('content')



<div class="col-lg-12">
    <div class="card">
        <div class="card-body order-list">
            <h4 class="header-title mt-0 mb-3">لائحة الطلبات</h4>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-top-0">رقم الطلب</th>
                            <th class="border-top-0">تاريخ وقت عمل الطلب</th>
                            <th class="border-top-0">حالة الطلب</th>
                            <th class="border-top-0">مجموع السعر</th>
                            <th class="border-top-0">تاريخ استلام الطلب</th>
                            <th class="border-top-0">الساعة</th>
                            <th class="border-top-0">الاجراء</th>
                        </tr>
                        <!--end tr-->
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->created_at}}</td>
                            @if ($order->status == 'pending')
                            <td>  <span class="badge badge-md badge-boxed badge-soft-warning"> قيد المعالجة </span></td>
                            @elseif ($order->status == 'accepted')
                            <td>  <span class="badge badge-md badge-boxed badge-soft-success"> تمت الموافقة </span></td>
                            @else
                            <td>  <span class="badge badge-md badge-boxed badge-soft-danger"> تم الرفض </span></td>
                            @endif
                            <?php $date = explode(' ', $order->checkout->received_date);?>
                            <td>{{$order->total_price}} JD</td>
                            <td> {{$date[0]}}</td>
                            <td> {{$date[1]}}</td>
                            <td>
                                <a href="{{route('kitchen.orders.show',$order->id)}}">تفاصيل</a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                        <!--end tr-->

                    </tbody>
                </table> <!--end table-->
            </div><!--end /div-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->
</div>
@endsection

@section('script')

@endsection
