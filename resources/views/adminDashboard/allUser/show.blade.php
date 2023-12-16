@extends('adminDashboard.layouts.master')


@section('title')
All users
@endsection

@section('css')

        <!-- Sweet Alert -->
        <link rel="stylesheet" type="text/css" href="{{asset('adminDashboard/plugins/sweet-alert2/sweetalert2.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('adminDashboard/plugins/animate/animate.css')}}">

        <style>
            .show_confirm{
                border: none;
                background-color: white;
            }
            table th ,table td {
                text-align: center
            }

        </style>

@endsection

@section('section_title')
All Users
@endsection

@section('title_page1')

@endsection

@section('title_page2')
all users
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">All Users</h4>


                    <div class="table-responsive">
                        <table class="table mb-0 table-centered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=1?>
                                @foreach ($data as $value)
                                    <tr>

                                        <td>{{$i}}</td>
                                        <td>
                                            <img src={{URL::asset("storage/images/$value->image")}} alt="{{$value->name}}" class="rounded-circle thumb-sm mr-1">
                                        </td>
                                        <td>{{$value->first_name}} {{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->phone}}</td>
                                        <td>
                                            <form action="{{route('admin.allUsers.destroy',$value->id)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="show_confirm"  data-toggle="tooltip" title='Delete'><i class="fas fa-trash-alt text-danger font-16"></i></button>
                                              </form>
                                        </td>


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


        <!-- Sweet-Alert  -->
        <script src="{{URL::asset('adminDashboard/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>

        <script src="{{URL::asset('adminDashboard/assets/pages/jquery.sweet-alert.init.js')}}"></script>

        {{-- sweet alert --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      <script type="text/javascript">

           $('.show_confirm').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    form.submit();
                  }
                });
            });

      </script>
@endsection
