@extends('kitchenDashboard.layouts.master')


@section('title')
All Products
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
كافة المنتجات
@endsection

@section('title_page1')

@endsection

@section('title_page2')
كافة المنتجات
@endsection


@section('content')

    @if(session()->get('success'))
    <div class="card" >
        <div class="card-body">
            <div class="alert icon-custom-alert alert-outline-success alert-success-shadow" role="alert" style="margin:0">
                <i class="mdi mdi-check-all alert-icon"></i>
                <div class="alert-text">
                    <strong>تمت العملية</strong>  {{ session()->get('success') }}
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <h5 class="header-title">كافة المنتجات</h5>
                    <div class="">
                        <table id="datatable2" class="table dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المنتج</th>
                                <th>صنف المنتج</th>
                                <th>تفاصيل أكثر</th>
                                <th>اجراء</th>
                            </tr>
                            </thead>


                            <tbody>
                                <?php $i=1?>
                                @foreach ($products as $value)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->category->name}}</td>
                                        <td><a href="{{Route('kitchen.products.show',$value->id)}}">تفاصيل أكثر</a></td>
                                        <td>
                                            <a href="{{route('kitchen.products.edit',$value->id)}}" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>

                                            <form action="{{route('kitchen.products.destroy',$value->id)}}" method="post" style="display: inline-block">
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
               title: `هل أنت متأكد أنك تريد حذف هذا الحقل؟`,
               text: "اذا تم حذفه، سيتم حذفه نهائيا",
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
