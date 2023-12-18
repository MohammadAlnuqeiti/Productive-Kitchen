@extends('publicUser.layouts.master')


@section('title')
Contact Us
@endsection

@section('css')
{{-- <link rel="stylesheet" href="{{asset('userSide/css/new.css')}}"> --}}
<style>
    .error{
  color: red;
  font-size: 15px;
  margin-top: -25px;
  margin-bottom: 5px;
}

.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 20px;
  border-radius: 3px 3px 3px 3px;
}

.success-msg {
  color: #270;
  background-color: #DFF2BF;
  width: 100%
}
</style>
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
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/userSide/img/bg/10.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                            <h1 class="section-title white-color">اتصل بنا</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('home')}}">الرئيسية</a></li>
                                <li>اتصل بنا</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="/userSide/img/icons/10.png" alt="Icon Image">
                        </div>
                        <h3>عنوان البريد الالكتروني</h3>
                        <p>mohammadalnuqeiti@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="/userSide/img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3>رقم الهاتف</h3>
                        <p>962-79036-9501+</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="/userSide/img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3>عنوان المكتب</h3>
                        <p>الأردن ، العقبة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

    <!-- CONTACT MESSAGE AREA START -->
    <div class="ltn__contact-message-area mb-120 mb--100">
        <div class="container">
            <div class="row">
                @if(session()->get('success'))
                    <div class="success-msg">
                        <i class="fa fa-check"></i>

                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2">اتصل بنا</h4>
                        <form  action="{{route('user.contact.create')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="ادخل الاسم" autofocus value="{{ old('name')}}" class="@error('name') is-invalid @enderror">
                                        @error('name')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="ادخل الايميل" value="{{ old('email')}}" class="@error('email') is-invalid @enderror">
                                        @error('email')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="ادخل رقم الهاتف" value="{{ old('phone')}}" class="@error('phone') is-invalid @enderror">
                                        @error('phone')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <input type="text" name="subject" placeholder="ادخل العنوان" value="{{ old('subject')}}" class="@error('subject') is-invalid @enderror">
                                        @error('subject')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Select Service Type</option>
                                            <option>Gardening </option>
                                            <option>Landscaping </option>
                                            <option>Vegetables Growing</option>
                                            <option>Land Preparation</option>
                                        </select>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="ادخل الرسالة" value="{{ old('message')}}" class="@error('message') is-invalid @enderror"></textarea>
                                @error('message')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">إرسال الرسالة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT MESSAGE AREA END -->

    <!-- GOOGLE MAP AREA START -->
    <div class="google-map mb-120">

        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3471.4224292804847!2d35.01115192454051!3d29.533189975185124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjnCsDMxJzU5LjUiTiAzNcKwMDAnMzAuOSJF!5e0!3m2!1sar!2sjo!4v1685844943959!5m2!1sar!2sjo" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- GOOGLE MAP AREA END -->

@endsection

@section('script')

<!-- Contact Form -->
<script src="{{URL::asset('userSide/js/contact.js')}}"></script>
@endsection
