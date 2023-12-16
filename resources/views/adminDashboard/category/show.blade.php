@extends('adminDashboard.layouts.master')


@section('title')
Category
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

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
All Categorios
@endsection

@section('title_page1')

@endsection

@section('title_page2')
all categorios
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

                    <h4 class="mt-0 header-title">All Categorios</h4>


                    <div class="table-responsive">
                        <table class="table mb-0 table-centered">
                            <thead>
                            <tr>

                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php $i=1?>
                                @foreach ($categories as $category)
                                    <tr>

                                        <td> {{$i}}</td>
                                        <td>
                                            <img src="{{URL::asset("storage/images/$category->image")}}" alt="{{$category->name}}" class="rounded-circle thumb-sm mr-1">
                                        </td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <a href="{{route('admin.categories.edit',$category->id)}}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>
                                            <form action="{{route('admin.categories.destroy',$category->id)}}" method="post" style="display: inline-block">
                                                @method('delete')
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="show_confirm"  data-toggle="tooltip" title='Delete'><i class="fas fa-trash-alt text-danger font-16"></i></button>
                                            </form>
                                            {{-- <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a> --}}
                                        </td>

                                    </tr>
                                <?php ++$i ?>
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
