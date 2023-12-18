@extends('kitchenDashboard.layouts.master')


@section('title')
Create Product
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
اضافة منتج
@endsection

@section('title_page1')

@endsection

@section('title_page2')
اضافة منتج
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">اضافة منتج</h4>
                    <form action="{{route('kitchen.products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">اسم المنتج</label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="ادخل اسم المنتج" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name')}}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription1"></label>وصف المنتج</label>
                            <input type="text" class="form-control" id="exampleInputDescription1" placeholder="وصف المنتج" name="short_description" value="{{ old('short_description')}}" class="@error('short_description') is-invalid @enderror" value="{{ old('name')}}">
                            @error('short_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription2">تفاصيل المنتج</label>
                            <input type="text" class="form-control" id="exampleInputDescription2" placeholder="تفاصيل المنتج" name="long_description" value="{{ old('long_description')}}" class="@error('long_description') is-invalid @enderror" value="{{ old('name')}}">
                            @error('long_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPrice">سعر المنتج</label>
                            <input type="text" class="form-control" id="exampleInputPrice" placeholder="سعر المنتج" name="price" value="{{ old('price')}}" class="@error('price') is-invalid @enderror" value="{{ old('name')}}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlCategory1">صنف المنتج</label>
                            <select class="form-control" id="exampleFormControlCategory1" name="category_id" value="{{ old('category_id')}}" class="@error('category_id') is-invalid @enderror" value="{{ old('category_id')}}">
                                @foreach ($categorios as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputImage1">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputImage1" name="image" class="@error('image') is-invalid @enderror" value="{{ old('image')}}">
                                    <label class="custom-file-label" for="exampleInputImage1">اختر ملف</label>
                                </div>
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>


                        <button type="submit" class="btn btn-gradient-primary">اضافة</button>
                        <a href="{{route('kitchen.products.index')}}"><button type="button" class="btn btn-gradient-danger" >الغاء</button></a>
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
