@extends('kitchenDashboard.layouts.master')


@section('title')
Orders
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
تفاصيل الطلب
@endsection

@section('title_page1')

@endsection

@section('title_page2')
تفاصيل الطلب
@endsection

@section('content')



<div class="col-lg-12">
    <div class="card">
        <div class="card-body order-list">
            <h4 class="header-title mt-0 mb-3">تفاصيل الطلب</h4>
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <tbody>
                        <tr>
                            <th class="thead-light">رقم الطلب :</th>
                            <td>{{$order_no->id}}</td>
                        </tr>
                        <tr>
                            <th class="thead-light">حالة الطلب :</th>
                            @if ($order_no->status == 'pending')
                                <td>قيد المعالجة</td>
                            @elseif ($order_no->status == 'accepted')
                                <td>تمت الموافقة</td>
                            @else
                                <td>تم الرفض</td>
                            @endif
                        </tr>
                        <tr>
                            <th class="thead-light">اجمالي السعر :</th>
                            <td>{{$order_no->total_price}}</td>
                        </tr>
                        {{-- <tr>
                            <th class="border-top-0">تاريخ و وقت استلام الطلب :</th>
                            <td>---</td>
                        </tr> --}}
                    </tbody>
                </table>
                <table class="table table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">اسم المنتج</th>
                            <th class="border-top-0">الكمية</th>
                            <th class="border-top-0">السعر</th>
                        </tr>
                        <!--end tr-->
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
                        {{-- <tr>
                            <td colspan="2" style="text-align: center">f</td>
                            <td colspan="2" style="text-align: center">f</td>
                        </tr> --}}
                        <!--end tr-->

                    </tbody>
                </table> <!--end table-->
                @if ($order_no->status == 'pending')
                    <hr>
                    <h4 class="header-title mt-0 mb-3">الرد على الطلب</h4>
                    <form action="{{route('kitchen.order',$order_no->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="exampleFormControlCategory1">قبول / رفض</label>
                            <select class="form-control" id="exampleFormControlCategory1" name="status" class="@error('status') is-invalid @enderror" value="{{ old('status')}}">
                                    <option value="">---</option>
                                    <option value="accepted">قبول</option>
                                    <option value="regected">رفض</option>
                            </select>
                            @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">رسالة للعميل (اختياري)</label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="ادخل الرساالة" name="message" class="@error('message') is-invalid @enderror" value="{{ old('message')}}">
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-gradient-primary">حفظ</button>

                    </form>

                @endif

            </div><!--end /div-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->
</div>
@endsection

@section('script')

@endsection
