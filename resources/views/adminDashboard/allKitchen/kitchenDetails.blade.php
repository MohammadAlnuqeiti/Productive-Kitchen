@extends('adminDashboard.layouts.master')


@section('title')
Kitchen details
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Kitchen Details
@endsection

@section('title_page1')

@endsection

@section('title_page2')
kitchen details
@endsection

@section('content')
{{-- {{dd($data['short_description'])}} --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php $image = $data['image'] ?>
                            <img src="{{URL::asset("storage/images/$image")}}" alt="{{$data['first_name']}}" class=" mx-auto  d-block" height="400" width="420px">
                        </div><!--end col-->
                        <div class="col-lg-6 align-self-center">
                            <div class="single-pro-detail">
                                <p class="mb-1">Kitchen</p>
                                <div class="custom-border mb-3"></div>
                                <h3 class="pro-title">name : {{$data['kitchen_name']}}</h3>
                                <p class="text-muted mb-0">email :{{$data['email']}}</p>
                                <p class="text-muted mb-0">phone :{{$data['phone']}}</p>
                                <p class="text-muted mb-0">number of product :(30 reviews)</p>
                                {{-- <ul class="list-inline mb-2 product-review">
                                    <li class="list-inline-item">number of product : </i></li>
                                    <li class="list-inline-item"> (30 reviews)</li>
                                </ul> --}}
                                {{-- <h2 class="pro-price">$89.00 <span><del>$180.00</del></span><span class="text-danger font-weight-bold ml-2">50% Off</span></h2> --}}
                                <h6 class="text-muted font-13">short description :</h6>
                                <ul class="list-unstyled pro-features border-0">
                                    <li>{{$data['short_description']}}.</li>
                                </ul>
                                <h6 class="text-muted font-13">long description :</h6>
                                <ul class="list-unstyled pro-features border-0">
                                    <li>{{$data['long_description']}}.</li>
                                </ul>
                                {{-- <h6 class="text-muted font-13 d-inline-block align-middle mr-2">Color :</h6>
                                <div class="radio2 radio-info2 form-check-inline ml-2">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                    <label for="inlineRadio1"></label>
                                </div> --}}
                                {{-- <div class="radio2 radio-dark2 form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                    <label for="inlineRadio2"></label>
                                </div> --}}
                                {{-- <div class="quantity mt-3 ">
                                    <input class="form-control" type="number" min="0" value="0" id="example-number-input">
                                    <a href="" class="btn btn-gradient-primary text-white px-4 d-inline-block"><i class="mdi mdi-cart mr-2"></i>Add to Cart</a>
                                </div> --}}
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
