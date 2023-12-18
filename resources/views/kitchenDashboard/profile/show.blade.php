@extends('kitchenDashboard.layouts.master')


@section('title')
Profile
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
الملف الشخصي
@endsection

@section('title_page1')

@endsection

@section('title_page2')
الملف الشخصي
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body  met-pro-bg">
                    <div class="met-profile">
                        <div class="row">
                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                <div class="met-profile-main">
                                    <div class="met-profile-main-pic">
                                        <?php $image = Auth()->user()->image ?>
                                        <img src="{{URL::asset("storage/images/$image")}}" alt="" class="rounded-circle" style="width: 128px">
                                        <span class="fro-profile_main-pic-change">
                                            <i class="fas fa-camera"></i>
                                        </span>
                                    </div>
                                    <div class="met-profile_user-detail">
                                        <h5 class="met-user-name">{{Auth()->user()->first_name}}</h5>
                                        {{-- <p class="mb-0 met-user-name-post">UI/UX Designer</p> --}}
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4 ml-auto">
                                <ul class="list-unstyled personal-detail">
                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> الهاتف </b> : {{Auth()->user()->phone}}</li>
                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> الايميل </b> : {{Auth()->user()->email}}</li>
                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>الموقع</b> : AQABA</li>
                                </ul>
                                <div class="button-list btn-social-icon">
                                    <div class="button-list btn-social-icon">
                                        <button type="button" class="btn btn-blue btn-circle">
                                            <i class="fab fa-facebook-f"></i>{{ Auth()->user()->Facebook_link }}
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-circle ml-2">
                                            <i class="fab fa-instagram"></i>{{ Auth()->user()->Instagram_link }}
                                        </button>
                                    </div>

                                    {{-- <button type="button" class="btn btn-pink btn-circle  ml-2">
                                        <i class="fab fa-dribbble"></i>
                                    </button> --}}
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end f_profile-->
                </div><!--end card-body-->
                <div class="card-body">
                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">الملف الشخصي</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="portfolio_detail_tab" data-toggle="pill" href="#portfolio_detail">تعديل الملف الشخصي</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#settings_detail">تعديل بيانات المطبخ</a>
                        </li>
                    </ul>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end row-->
    <div class="row">
        <div class="col-12">
            <div class="tab-content detail-list" id="pills-tabContent">
                <div class="tab-pane fade show active" id="general_detail">
                    <div class="row">
                        {{-- <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class=" d-flex justify-content-between">
                                            <img src="/adminDashboard/assets/images/widgets/monthly-re.png" alt="" height="75">
                                            <div class="align-self-center">
                                                <h2 class="mt-0 mb-2 font-weight-semibold">$955<span class="badge badge-soft-success font-11 ml-2"><i class="fas fa-arrow-up"></i> 8.6%</span></h2>
                                                <h4 class="title-text mb-0">Monthly Revenue</h4>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between bg-purple p-3 mt-3 rounded">
                                            <div>
                                                <h4 class="mb-1 font-weight-semibold text-white">$10255</h4>
                                                <p class="text-white mb-0">Card Balance</p>
                                            </div>
                                            <div>
                                                <h4 class=" mb-1 font-weight-semibold text-white">25.12 <small>BTC</small></h4>
                                                <p class="text-white mb-0">Crypto Balance</p>
                                            </div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            <div class="card">
                                <div class="card-body dash-info-carousel">
                                    <h4 class="mt-0 header-title mb-4">New Leads</h4>
                                    <div id="carousel_1" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="/adminDashboard/assets/images/users/user-1.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text text-dark">Important Watch</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="/adminDashboard/assets/images/users/user-2.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text">Wireless Headphone</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="media">
                                                    <img src="/adminDashboard/assets/images/users/user-3.jpg" class="mr-2 thumb-lg rounded-circle" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text">Leather Bag</h4>
                                                        <p class="text-muted mb-0">Python Devloper</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-6">
                                            <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-secondary"></i>New Leads</p>
                                        </div><!-- end col-->
                                        <div class="col-sm-6">
                                            <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-warning"></i>New Leads Target</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->
                                    <div class="progress bg-warning mb-3" style="height:5px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0 text-muted text-truncate align-self-center"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Up From Last Week</p>
                                        <button type="button" class="btn btn-gradient-primary btn-sm">Leads Report</button>
                                    </div>
                                    <div class="bg-light p-3 mt-3 d-flex justify-content-between">
                                        <div>
                                            <h2 class="mb-1 font-weight-semibold">402</h2>
                                            <p class="text-muted mb-0">New Leads Won</p>
                                        </div>
                                        <div class="img-group align-self-center">
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/adminDashboard/assets/images/users/user-6.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/adminDashboard/assets/images/users/user-2.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/adminDashboard/assets/images/users/user-3.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a class="user-avatar user-avatar-group" href="#">
                                                <img src="/adminDashboard/assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-xs">
                                            </a>
                                            <a href="" class="avatar-box thumb-xs align-self-center">
                                                <span class="avatar-title bg-soft-info rounded-circle font-13 font-weight-normal">+25</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-lg-right float-none eco-revene-history justify-content-end">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">This Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Last Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Last Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="header-title mt-0">Revenue</h4>
                                    <canvas id="bar" class="drop-shadow w-100"  height="350"></canvas>
                                </div><!--end card-body-->
                            </div><!--end card-->

                            <div class="card dash-info-carousel">
                                <div class="card-body">
                                    <div id="carousel_2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="/adminDashboard/assets/images/products/img-1.png" class="mr-3 thumb-xl align-self-center" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text text-dark">White Shoe</h4>
                                                        <p class="text-muted mb-1">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                        <p class="text-muted">When an unknown printer took a galley of type.</p>
                                                        <span class="px-2 py-1 bg-soft-pink d-inline-block">Sold 582</span>
                                                        <a href="" class="bg-soft-purple px-2 py-1"><i class="dripicons-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="media">
                                                    <img src="/adminDashboard/assets/images/products/img-2.png" class="mr-3 thumb-xl align-self-center" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text">Unique Watch</h4>
                                                        <p class="text-muted mb-1">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                        <p class="text-muted">When an unknown printer took a galley of type.</p>
                                                        <span class="px-2 py-1 bg-soft-pink d-inline-block">Sold 582</span>
                                                        <a href="" class="bg-soft-purple px-2 py-1"><i class="dripicons-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <div class="media">
                                                    <img src="/adminDashboard/assets/images/products/img-7.png" class="mr-3 thumb-xl align-self-center" alt="...">
                                                    <div class="media-body align-self-center">
                                                        <h4 class="mt-0 mb-1 title-text">Unique Watch</h4>
                                                        <p class="text-muted mb-1">Standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                                                        <p class="text-muted">When an unknown printer took a galley of type.</p>
                                                        <span class="px-2 py-1 bg-soft-pink d-inline-block">Sold 582</span>
                                                        <a href="" class="bg-soft-purple px-2 py-1"><i class="dripicons-download"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel_2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel_2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col--> --}}
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dash-datepick">
                                        <input type="hidden" id="light_datepick"/>
                                    </div>
                                    <div class="d-flex justify-content-between p-3 bg-light">
                                        <div class="media">
                                            <img src="/adminDashboard/assets/images/users/user-2.jpg" class="mr-3 thumb-md rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h5 class="mt-0 text-dark mb-1">Harry McCall</h5>
                                                <p class="mb-0">Dealer USA <span class="text-muted">Today Harry's Birth Day</span></p>
                                            </div>
                                        </div>
                                        <span class="font-24 align-self-center">🎂</span>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                    </div><!--end row-->
                </div><!--end general detail-->



                <div class="tab-pane fade" id="portfolio_detail">
                    <div class="row">
                        <div class="col-lg-12 col-xl-9 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
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
                                        <form class="form-horizontal form-material mb-0"  action="{{route('kitchen.profile.update',$data['id'])}}" method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="الاسم الاول" class="form-control" name="first_name" value="{{$data['first_name']}}" class="@error('first_name') is-invalid @enderror">
                                                @error('first_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="الاسم الثاني" class="form-control" name="last_name" value="{{$data['last_name']}}" class="@error('last_name') is-invalid @enderror">
                                                @error('last_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="الايميل" class="form-control"  id="example-email" name="email" value="{{$data['email']}}" class="@error('email') is-invalid @enderror">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="رقم الهاتف" class="form-control" name="phone" value="{{$data['phone']}}" class="@error('phone') is-invalid @enderror">
                                                @error('phone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="كلمة السر" class="form-control" name="password"  class="@error('password') is-invalid @enderror">
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputImage1">الصورة</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputImage1" name="image" class="@error('image') is-invalid @enderror">
                                                        <label class="custom-file-label" for="exampleInputImage1">اختر الملف</label>
                                                    </div>
                                                </div>
                                                @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-gradient-primary">تحديث</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!--end col-->
                    </div><!--end row-->
                </div><!--end portfolio detail-->

                <div class="tab-pane fade" id="settings_detail">
                    <div class="row">
                        <div class="col-lg-12 col-xl-9 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        @if(session()->get('success2'))
                                            <div class="card" >
                                                <div class="card-body">
                                                    <div class="alert icon-custom-alert alert-outline-success alert-success-shadow" role="alert" style="margin:0">
                                                        <i class="mdi mdi-check-all alert-icon"></i>
                                                        <div class="alert-text">
                                                            <strong>تمت العملية</strong>  {{ session()->get('success2') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <form class="form-horizontal form-material mb-0" method="post" class="card-box"  action="{{route('kitchen.editDetails',$data['id'])}}" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="اسم المطبخ" name="kitchen_name" class="form-control" value="{{$data['kitchen_name']}}" class="@error('kitchen_name') is-invalid @enderror">
                                                @error('kitchen_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="وصف عن المطبخ" class="form-control" name="short_description" value="{{$data['short_description']}}" class="@error('short_description') is-invalid @enderror">
                                                @error('short_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="5" placeholder="نبذة عن المطبخ" class="form-control @error('long_description') is-invalid @enderror" name="long_description">{{ old('long_description', $data['long_description']) }}</textarea>
                                                @error('long_description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputImage1">صورة</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputImage1" name="kitchen_image" class="@error('kitchen_image') is-invalid @enderror">
                                                        <label class="custom-file-label" for="exampleInputImage1">اختر الملف</label>
                                                    </div>
                                                </div>
                                                @error('kitchen_image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-gradient-primary">تحديث</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!--end col-->
                    </div><!--end row-->
                </div><!--end settings detail-->
            </div><!--end tab-content-->

        </div><!--end col-->
    </div><!--end row-->

</div><!-- container -->
@endsection

@section('script')

@endsection
