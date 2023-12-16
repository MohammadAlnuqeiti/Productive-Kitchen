@extends('adminDashboard.layouts.master')


@section('title')
Create admin
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Create Admin
@endsection

@section('title_page1')

@endsection

@section('title_page2')
create admin
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Create Admin</h4>
                    <br/>
                    <form action="{{route('admin.store.admin')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">First Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter  first name" name="first_name" value="{{ old('first_name')}}" class="@error('first_name') is-invalid @enderror">
                            @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName2">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" aria-describedby="emailHelp" placeholder="Enter last name" name="last_name" value="{{ old('last_name')}}" class="@error('last_name') is-invalid @enderror">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone1">Phone number</label>
                            <input type="text" class="form-control" id="exampleInputPhone1" placeholder="phone" name="phone" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="{{ old('password')}}" class="@error('password') is-invalid @enderror">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-gradient-primary">Submit</button>
                        <a href="{{route('admin.allAdmin')}}"><button type="button" class="btn btn-gradient-danger">Cancel</button></a>
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
