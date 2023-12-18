@extends('adminDashboard.layouts.master')


@section('title')
Products Reviews
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Products Reviews
@endsection

@section('title_page1')

@endsection

@section('title_page2')
products reviews
@endsection


@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Products Reviews</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr style="text-align: center">
                                <th>#</th>
                                <th>Username</th>
                                <th>Reviews</th>
                                <th>Product Name</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($ProductReview as $value)
                                    <tr style="text-align: center">
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->user->first_name}} {{$value->user->last_name}}</td>
                                        <td>{{$value->comment}}</td>
                                        <td>{{$value->product->name}}</td>
                                        <?php $date = explode(' ', $value->created_at);?>
                                        <td> {{$date[0]}}</td>
                                    </tr>
                                @empty

                                @endforelse
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
