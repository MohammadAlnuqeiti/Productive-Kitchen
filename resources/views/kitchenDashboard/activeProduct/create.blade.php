@extends('kitchenDashboard.layouts.master')


@section('title')
Receiving orders for products
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}
<style>
        #Determine_the_duration{
            display:none;

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


    <div class="row">
        <div class="col-lg-9 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">استقبال الطلبات</h4>
                    <form action="{{route('kitchen.receivingProduct.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf


                        <div class="form-group">
                            <div class="my-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="no_reservation_required" {{ $errors->any() ? '' : 'checked' }} name="customRadio" class="custom-control-input" value="0">
                                    <label class="custom-control-label" for="no_reservation_required">لا يحتاج للحجز المسبق</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="my-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="reservation_required" {{ $errors->any() ? 'checked' : '' }} name="customRadio" class="custom-control-input" value="1">
                                    <label class="custom-control-label" for="reservation_required">يحتاج للحجز المسبق</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="Determine_the_duration">
                            <label for="exampleInputDiscount">كم المدة اللازمة للتوصية على الطلب / بالساعة</label>
                            <input type="text" class="form-control" id="exampleInputDiscount" placeholder="مدة توصية الطلب" name="duration" value="{{ old('duration')}}" class="@error('duration') is-invalid @enderror">
                            @error('duration')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-gradient-primary">اضافة</button>
                        <a href="{{route('kitchen.receivingProduct.index')}}"><button type="button" class="btn btn-gradient-danger" >الغاء</button></a>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->

    </div>
    <!--end row-->


</div>

@endsection

@section('script')
    <script>

        const reservation_required = document.getElementById('reservation_required')
        const no_reservation_required = document.getElementById('no_reservation_required')
        
        // reservation_required.addEventListener('change', (event) => {
        //     if (event.currentTarget.checked) {
        //         document.getElementById("Determine_the_duration").style.display = "block";
        //     } 
        // })
        
        $('#reservation_required').click(function(){
            if($(this).is(':checked')){
                document.getElementById("Determine_the_duration").style.display = "block";
            } 
        });
        no_reservation_required.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                document.getElementById("Determine_the_duration").style.display = "none";
            } 
        })


    </script>
@endsection
