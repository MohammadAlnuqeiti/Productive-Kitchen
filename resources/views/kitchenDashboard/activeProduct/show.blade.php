@extends('kitchenDashboard.layouts.master')


@section('title')
Receiving orders for products
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
استقبال الطلبات على المنتجات
@endsection

@section('title_page1')

@endsection

@section('title_page2')
استقبال الطلبات على المنتجات
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div class="media">
                    <?php $image = $kitchenDetails['image'] ?>
                        <img src="{{URL::asset("storage/images/$image")}}" height="40" class="mr-4 align-self-center" alt="...">
                        <div class="media-body align-self-center">
                            <h6 class="mt-0 font-15 mb-1">حالة المطبخ الان </h6>
                            @if ($kitchenDetails['is_active'] == 1)
                                <td> <span class="badge badge-soft-success">مفتوح </span></td>
                            @else
                                <td> <span class="badge badge-soft-danger">مغلق </span></td>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-4 align-self-center text-center">
                    @if ($kitchenDetails['is_active'] == 1)
                        <form action="{{route('kitchen.close',$kitchenDetails['id'])}}" method="post" style="display: inline-block">
                            @method('PUT')
                            @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="show_confirm_close btn btn-danger waves-effect waves-light"  data-toggle="tooltip">اغلاق المطبخ</button>
                        </form>
                    @else
                        <form action="{{route('kitchen.open',$kitchenDetails['id'])}}" method="post" style="display: inline-block">
                            @method('PUT')
                            @csrf
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="show_confirm_open btn btn-success waves-effect waves-light"  data-toggle="tooltip">فتح المطبخ</button>
                        </form>
                    @endif
                </div>
            </div>
        </div><!--end card-body-->
    </div><!--end card-->    
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
                                <th>حالة المنتج</th>
                                <th>المدة المطلوبة للتوصية على الطلب / ساعة</th>
                                <th>اجراء</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i=1?>
                                @foreach ($products as $value)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$value->name}}</td>
                                        @if ($value->is_active == 1)
                                            <td> <span class="badge badge-soft-success">هذاالمنتج يستقبل الطلبات </span></td>
                                        @else
                                            <td> <span class="badge badge-soft-danger">هذاالمنتج لا يستقبل الطلبات </span></td>
                                        @endif
                                        @if ($value->is_active == 0)
                                                <td> - </td>
                                        @else
                                            @if ($value->duration_of_product_recommendation == 0)
                                                <td> لا يحتاج للطلب المسبق </td>
                                            @else
                                                <td>{{$value->duration_of_product_recommendation}}</td>
                                            @endif
                                        @endif
                                        @if ($value->is_active == 0)
                                            <td>
                                                <a href="{{route('kitchen.receivingProduct.edit',$value->id)}}" class="mr-2"> <button type="button" class="btn btn-outline-success waves-effect waves-light">تفعيل استلام الطلبات لهذا المنتج</button></a>
                                            </td>
                                        @else
                                            <td>
                                                <form action="{{route('kitchen.receivingProduct.destroy',$value->id)}}" method="post" style="display: inline-block">
                                                    @method('delete')
                                                    @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="show_confirm btn btn-outline-danger waves-effect waves-light"  data-toggle="tooltip">إلغاء تفعيل استلام الطلبات لهذا المنتج</button>
                                                </form>
                                            </td>
                                        @endif
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
               title: `هل أنت متأكد أنك تريد إلغاء استقبال الطلبات لهذا المنتج؟`,
               text: "اذا ضغطت نعم، سيتم ايقاف استقبال الطلبات من الموقع",
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
      $('.show_confirm_close').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
               title: `هل أنت متأكد أنك تريد إغلاق المطبخ؟`,
               text: "اذا ضغطت نعم، سيتم ايقاف استلام الطلبات على جميع المنتجات",
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
      $('.show_confirm_open').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
               title: `هل أنت متأكد أنك تريد فتح المطبخ؟`,
               text: "اذا ضغطت نعم، يجب عليك تفعيل المنتجات التي تريد استقبال الطلبات لها",
               icon: "success",
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
