@extends('adminDashboard.layouts.master')


@section('title')
All admin
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
All Admin
@endsection

@section('title_page1')

@endsection

@section('title_page2')
all admin
@endsection

@section('content')

    @if(session()->get('success'))
        <div class="card" >
            <div class="card-body">
                <div class="alert icon-custom-alert alert-outline-success alert-success-shadow" role="alert" style="margin:0">
                    <i class="mdi mdi-check-all alert-icon"></i>
                    <div class="alert-text">
                        <strong>Well done!</strong>  {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Admin Table</h4>


                    <div class="table-responsive">
                        <table class="table mb-0 table-centered">
                            <thead>
                                <tr style="text-align: center">
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1?>
                                @foreach ($data as $value)
                                    <tr style="text-align: center">


                                        <td>{{$i}}</td>
                                        <td><img src={{URL::asset("storage/images/$value->image")}} alt="{{$value->name}}" class="rounded-circle thumb-sm mr-1">

                                        </td>
                                        <td>{{$value->first_name}} {{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->phone}}</td>

                                    </tr>
                                <?php ++$i?>
                                @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->

    </div>
    <!-- end row -->
</div>
@endsection

@section('script')

@endsection
