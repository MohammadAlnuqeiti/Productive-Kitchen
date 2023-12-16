@extends('adminDashboard.layouts.master')


@section('title')
Messages
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Meassages
@endsection

@section('title_page1')

@endsection

@section('title_page2')
message
@endsection

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Website messages</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($data as $value)
                                    <tr>

                                        <th scope="row">{{$i}}</th>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->phoneNumber}}</td>
                                        <td>{{$value->subject}}</td>
                                        <td>{{$value->message}}</td>

                                    </tr>
                                <?php ++$i ?>
                                @endforeach
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
