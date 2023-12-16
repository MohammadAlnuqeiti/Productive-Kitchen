@extends('kitchenDashboard.layouts.master')


@section('title')
Create Discount
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
اضافة خصم
@endsection

@section('title_page1')

@endsection

@section('title_page2')
اضافة خصم
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">اضافة خصم على منتج</h4>
                    <form action="{{route('kitchen.discount.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="exampleFormControlProduct">اسم المنتج</label>
                            <select class="form-control" id="exampleFormControlProduct" name="product_id" value="{{ old('product_id')}}" class="@error('product_id') is-invalid @enderror">
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                            @error('product_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputDiscount"> نسبة الخصم % </label>
                            <input type="text" class="form-control" id="exampleInputDiscount" placeholder="نسبة الخصم" name="discount_product" value="{{ old('discount_product')}}" class="@error('discount_product') is-invalid @enderror">
                            @error('discount_product')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-gradient-primary">اضافة</button>
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
