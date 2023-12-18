@extends('adminDashboard.layouts.master')


@section('title')
Orders
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
All Orders
@endsection

@section('title_page1')

@endsection

@section('title_page2')
all orders
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">All Orders</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr style="text-align: center">
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Date and Time</th>
                                    <th class="border-top-0">Status</th>
                                    <th class="border-top-0">Total Price</th>
                                    <th class="border-top-0">Received Date</th>
                                    <th class="border-top-0">Received Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                <tr style="text-align: center">
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
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->


    </div> <!-- end row -->

</div>
@endsection

@section('script')

@endsection
