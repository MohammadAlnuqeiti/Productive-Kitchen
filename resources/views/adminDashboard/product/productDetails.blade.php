@extends('adminDashboard.layouts.master')


@section('title')
Product details
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')

@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php $image = $data['image'] ?>
                            <img src="{{URL::asset("storage/images/$image")}}" alt="{{$data['name']}}" class=" mx-auto  d-block" height="400" width="420px">
                        </div><!--end col-->
                        <div class="col-lg-6 align-self-center">
                            <div class="single-pro-detail">
                                <p class="mb-1">Product</p>
                                <div class="custom-border mb-3"></div>
                                <h3 class="pro-title">{{$data['name']}}</h3>
                                <p class="text-muted mb-0">{{$data['short_description']}}</p>
                                {{-- <ul class="list-inline mb-2 product-review">
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    <li class="list-inline-item">4.5 (30 reviews)</li>
                                </ul> --}}
                                @if ($data['discount'] > 0)

                                    <h2 class="pro-price">{{$data['price_discount']}}JD<span><del> {{$data['price']}}JD</del></span><span class="text-danger font-weight-bold ml-2">{{$data['discount']}}% Off</span></h2>

                                @else

                                    <h2 class="pro-price">{{$data['price']}}JD</h2>

                                @endif
                                <h6 class="text-muted font-13">Description :</h6>
                                <ul class="list-unstyled pro-features border-0">
                                    <li>{{$data['long_description']}}.</li>
                                </ul>

                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->


</div>
<!-- container -->

@endsection

@section('script')

@endsection
