@extends('adminDashboard.layouts.master')


@section('title')
Create category
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Create Category
@endsection

@section('title_page1')

@endsection

@section('title_page2')
create category
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Create Category</h4>
                    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Category Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name')}}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputDescription1">Category Description</label>
                            <input type="text" class="form-control" id="exampleInputDescription1" placeholder="Description" name="description">
                        </div> --}}
                        <div class="form-group mb-0">
                            <label for="exampleInputDescription1">Category Description</label>
                            <textarea class="form-control" id="exampleInputDescription1" rows="3" name="description" class="@error('description') is-invalid @enderror" value="{{ old('description')}}"></textarea>
                            @error('description')
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
                        <a href="{{route('admin.categories.index')}}"><button type="button" class="btn btn-gradient-danger" >Cancel</button></a>
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
