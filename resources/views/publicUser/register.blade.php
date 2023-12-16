@extends('publicUser.layouts.master')


@section('title')

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
                            <h1 class="section-title white-color">انشاء حساب</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}">الرئيسية</a></li>
                                <li>انشاء حساب</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">سجّل الآن لخوض تجربة أشهى المأكولات </h1>
                        {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                             Sit aliquid,  Non distinctio vel iste.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form  method="POST" action="{{ route('register') }}" class="ltn__form-box contact-form-box">
                            @csrf
                            <input placeholder="الاسم الأول" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus>
                            @error('first_name')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input placeholder="الاسم الأخير" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>
                            @error('last_name')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input placeholder="البريد الإلكتروني*" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                            @error('email')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input placeholder="رقم الهاتف*" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">
                            @error('phone')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input placeholder="كلمة المرور*" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            @error('password')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input placeholder="تأكيد كلمة المرور" type="password" name="password_confirmation"  autocomplete="new-password">
                            {{-- <label class="checkbox-inline">
                                <input type="checkbox" value="">
                                I consent to Herboil processing my personal data in order to send personalized marketing material in accordance with the consent form and the privacy policy.
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">
                                By clicking "create account", I consent to the privacy policy.
                            </label> --}}
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">انشاء حساب</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <p>عند تسجيل الحساب فإنك توافق على :</p>
                            <p><a href="{{route('user.termsAndConditions')}}"> شروط الاستخدام &nbsp; &nbsp; | &nbsp; &nbsp; <a href="{{route('user.privacyPolicy')}}"> و خصوصية الموقع</a></a></p>
                            <div class="go-to-btn mt-50">
                                <a href="{{Route ('user.login')}}">هل لديك حساب؟  تسجيل الدخول</a>
                            </div>
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
