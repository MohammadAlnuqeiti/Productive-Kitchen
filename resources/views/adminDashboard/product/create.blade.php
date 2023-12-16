@extends('adminDashboard.layouts.master')


@section('title')
Create Product
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Create Product
@endsection

@section('title_page1')

@endsection

@section('title_page2')
create product
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Create Product</h4>
                    <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name')}}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription1">Short Description</label>
                            <input type="text" class="form-control" id="exampleInputDescription1" placeholder="Description" name="short_description" value="{{ old('short_description')}}" class="@error('short_description') is-invalid @enderror" value="{{ old('name')}}">
                            @error('short_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription2">Long Description</label>
                            <input type="text" class="form-control" id="exampleInputDescription2" placeholder="Description" name="long_description" value="{{ old('long_description')}}" class="@error('long_description') is-invalid @enderror" value="{{ old('name')}}">
                            @error('long_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPrice">Product Price</label>
                            <input type="text" class="form-control" id="exampleInputPrice" placeholder="Price" name="price" value="{{ old('price')}}" class="@error('price') is-invalid @enderror" value="{{ old('name')}}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputStore">Store</label>
                            <input type="text" class="form-control" id="exampleInputStore" placeholder="Store" name="store" value="{{ old('store')}}" class="@error('store') is-invalid @enderror" value="{{ old('name')}}">
                            @error('store')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleFormControlKitchen1">Kitchen Name</label>
                            <select class="form-control" id="exampleFormControlKitchen1" name="kitchen_id" value="{{ old('kitchen_id')}}" class="@error('kitchen_id') is-invalid @enderror" value="{{ old('kitchen_id')}}">
                                {{-- <option>-- SELECT --</option> --}}
                                @foreach ($kitchens as $kitchen)
                                    <option value="{{$kitchen->id}}">{{$kitchen->kitchen->kitchen_name}}</option>
                                @endforeach
                            </select>
                            @error('kitchen_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlCategory1">Category Name</label>
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
                                    <label class="custom-file-label" for="exampleInputImage1">Choose file</label>
                                </div>
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>


                        <button type="submit" class="btn btn-gradient-primary">Submit</button>
                        <a href="{{route('admin.products.index')}}"><button type="button" class="btn btn-gradient-danger" >Cancel</button></a>
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
