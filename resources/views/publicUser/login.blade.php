@extends('publicUser.layouts.master')


@section('title')
Login
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}

@endsection

@section('header_top_logo')

<a href="{{route('home')}}"><img src="/userSide/img/logoo.png" alt="Logo"></a>

@endsection

@section('header_top_sticky')

<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black plr--9---">

@endsection

@section('header_top')

<div class="col header-menu-column menu-color-white">

@endsection


@section('content')

 <!-- BREADCRUMB AREA START -->
 <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/userSide/img/bg/19.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                        <h1 class="section-title white-color">تسجيل الدخول</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{route('home')}}">الرئيسية</a></li>
                            <li>تسجيل الدخول</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">أهلا وسهلا بكم مجددا</h1>
                    <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                         Sit aliquid,  Non distinctio vel iste.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form  method="POST" action="{{ route('login') }}" class="ltn__form-box contact-form-box">
                        @csrf

                        <input name="email" placeholder="البريد الالكتروني*" type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"  autocomplete="email" autofocus>
                        @error('email')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input placeholder="كلمة المرور*" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">
                        @error('password')
                            <span>
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">{{ __('Login') }}</button>
                        </div>
                        {{-- <div class="go-to-btn mt-20">
                            <a href="#"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                        </div> --}}
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>ليس لديك حساب؟</h4>
                    {{-- <p>Add items to your wishlistget personalised recommendations <br>
                        check out more quickly track your orders register</p> --}}
                    <div class="btn-wrapper">
                        <a href="{{Route ('user.register')}}" class="theme-btn-1 btn black-btn">انشاء حساب</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

@endsection

@section('script')

@endsection

