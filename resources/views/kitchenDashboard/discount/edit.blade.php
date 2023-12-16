@extends('kitchenDashboard.layouts.master')


@section('title')
Edit Discount
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
تعديل الخصم
@endsection

@section('title_page1')

@endsection

@section('title_page2')
تعديل الخصم
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">تعديل نسبة الخصم</h4>
                    <form action="{{route('kitchen.discount.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        
                        <div class="form-group">
                            <label for="exampleInputDiscount">نسبة الخصم</label>
                            <input type="hidden" class="form-control" id="product"  name="product_id" value="{{ $product->id }}">
                            <input type="text" class="form-control" id="exampleInputDiscount" placeholder="نسبة الخصم" name="discount_product" value="{{ $product->discount }}" class="@error('discount_product') is-invalid @enderror">
                            @error('discount_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-gradient-primary">تعديل</button>
                        <a href="{{route('kitchen.discount.index')}}"><button type="button" class="btn btn-gradient-danger" >الغاء</button></a>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

    </div>
    <!--end row-->


</div>

@endsection

@section('script')

@endsection
