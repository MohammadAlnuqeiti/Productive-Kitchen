@extends('adminDashboard.layouts.master')


@section('title')
Profile
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('section_title')
Profile
@endsection

@section('title_page1')

@endsection

@section('title_page2')
profile
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
                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : {{Auth()->user()->phone}}</li>
                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : {{Auth()->user()->email}}</li>
                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : AQABA</li>
                                </ul>
                                <div class="button-list btn-social-icon">
                                    <button type="button" class="btn btn-blue btn-circle">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-secondary btn-circle ml-2">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-pink btn-circle  ml-2">
                                        <i class="fab fa-dribbble"></i>
                                    </button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end f_profile-->
                </div><!--end card-body-->
                <div class="card-body">
                    <ul class="nav nav-pills mb-0" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general_detail_tab" data-toggle="pill" href="#general_detail">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="settings_detail_tab" data-toggle="pill" href="#settings_detail">Edit Profile</a>
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
                        <div class="col-lg-8 m-auto">
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

                <div class="tab-pane fade" id="settings_detail">
                    <div class="row">
                        <div class="col-lg-12 col-xl-9 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <form class="form-horizontal form-material mb-0"  action="{{route('admin.profile.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="First Name" class="form-control" name="first_name" value="{{$data->first_name}}" class="@error('first_name') is-invalid @enderror">
                                                @error('first_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="{{$data->last_name}}" class="@error('last_name') is-invalid @enderror">
                                                @error('last_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" placeholder="Email" class="form-control"  id="example-email" name="email" value="{{$data->email}}" class="@error('email') is-invalid @enderror">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Phone No" class="form-control" name="phone" value="{{$data->phone}}" class="@error('phone') is-invalid @enderror">
                                                @error('phone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" placeholder="password" class="form-control" name="password"  class="@error('password') is-invalid @enderror">
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputImage1">Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="exampleInputImage1" name="image" class="@error('image') is-invalid @enderror">
                                                        <label class="custom-file-label" for="exampleInputImage1">Choose file</label>
                                                    </div>
                                                </div>
                                                @error('image')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>


                                            <div class="form-group">
                                                <button class="btn btn-gradient-primary btn-sm px-4 mt-3 float-right mb-0" type="submit">Update Profile</button>
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
