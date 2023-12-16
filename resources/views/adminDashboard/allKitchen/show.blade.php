@extends('adminDashboard.layouts.master')


@section('title')
All kitchen
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="{{asset('adminDashboard/plugins/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet"type="text/css" href="{{asset('adminDashboard/plugins/datatables/buttons.bootstrap4.min.css')}}">
<!-- Responsive datatable examples -->
<link rel="stylesheet" type="text/css" href="{{asset('adminDashboard/plugins/datatables/responsive.bootstrap4.min.css')}}">

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
All Kitchens
@endsection

@section('title_page1')

@endsection

@section('title_page2')
all kitchens
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
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h5 class="header-title">All Kitchens</h5>
                    <div class="">
                        <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>More Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                                <?php $i=1?>
                                @foreach ($data as $value)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$value->first_name}} {{$value->last_name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->phone}}</td>
                                        <td><a href="{{Route('admin.kitchens.show',$value->id)}}">more details</a></td>
                                        <td>
                                            {{-- <a href="{{route('admin.kitchens.edit',$value->id)}}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> --}}

                                            <form action="{{route('admin.kitchens.destroy',$value->id)}}" method="post" style="display: inline-block">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--end row-->

</div>
@endsection

@section('script')

<!-- Required datatable js -->
<script src="{{URL::asset('adminDashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{URL::asset('adminDashboard/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{URL::asset('adminDashboard/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('adminDashboard/assets/pages/jquery.datatable.init.js')}}"></script>

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
