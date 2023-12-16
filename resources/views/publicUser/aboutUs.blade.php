@extends('publicUser.layouts.master')


@section('title')
About Us
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
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="/userSide/img/bg/header.jpeg">
        {{-- https://www.supermama.me/system/App/Entities/Article/images/000/105/338/watermarked/7-%D9%88%D8%B5%D9%81%D8%A7%D8%AA-%D9%84%D8%A3%D9%83%D9%84%D8%A7%D8%AA-%D8%B1%D9%85%D8%B6%D8%A7%D9%86%D9%8A%D8%A9-%D8%A8%D8%A7%D9%84%D8%B5%D9%88%D8%B1-%D9%88-%D8%A7%D9%84%D9%85%D9%82%D8%A7%D8%AF%D9%8A%D8%B1.jpg --}}

        {{-- //https://scontent.famm10-1.fna.fbcdn.net/v/t1.6435-9/32156579_2156640347901918_1165947663674245120_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=NHCC4ytAdHQAX8Xm8Y5&_nc_ht=scontent.famm10-1.fna&oh=00_AfCWwttzoYNrnfXPdeejH7PRaaWeArf2LimzA6w2-kBuGQ&oe=648DA1FA --}}
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  اهلا وسهلا بكم في موقعنا</h6>
                            <h1 class="section-title white-color">من نحن</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">الرئيسية</a></li>
                                <li>من نحن</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120--- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="/userSide/img/bg/about.jpeg" alt="About Us Image">
                        {{-- https://i.pinimg.com/originals/13/b1/18/13b1182afa1ddac9ccfd226743e1e39c.jpg --}}
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">تعرف علينا أكثر</h6>
                            <h1 class="section-title">الموقع الأول للمطابخ الانتاجية في العقبة</h1>

                            <p>منصة الكترونية تعنى بدعم المطابخ الانتاجية في العقبة ضمن خيارات عديدة لأشهى الأطعمة المصنوعة بأيادي ماهرة الطبخ من منازلهم مع توفر خدمة التوصيل حتى باب البيت</p>
                        </div>
                        {{-- <p>"أن المشروعات الإنتاجية أدّت لإبراز دور المرأة اقتصاديا ضمن الإمكانيات المتاحة، إضافة إلى اكتسابها العديد من المهارات في مختلف المجالات والقطاعات، وجعلتها أكثر قدرة على اتخاذ القرار والثقة بنفسها، وحفز الريادة بداخلها."</p>
                        <div class="about-author-info d-flex">
                            <div class="author-name-designation  align-self-center">
                                <h4 class="mb-0">د.قاسم الحموري</h4>
                                <small>/ خبير اقتصادي</small>
                            </div>
                            <div class="author-sign">
                                    <img src="/userSide/img/icons/icon-img/author-sign.png" alt="#">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// ما يميزنا  //</h6>
                        <h1 class="section-title">لماذا نحن<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="/userSide/img/icons/icon-img/13.png" alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">تنوع بالأصناف</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>خيارات أكل متنوعة من مطابخ متعددة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="/userSide/img/icons/icon-img/12.png" alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">أيادي ماهرة</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>أكل محضر من أيادي مبدعة بالطبخ من منازلهم</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="/userSide/img/icons/icon-img/14.png" alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">توصيل سريع و جودة عالية</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>يتم الاحتفاظ بالأكل في أفضل حالة لضمان أكل طازج </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- TEAM AREA START (Team - 3) -->
    <div class="ltn__team-area pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">فريق العمل</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ltn__team-item">
                        <div class="team-img">
                            <img src="/userSide/img/team/1.jpg" alt="Image">
                        </div>
                        <div class="team-info">
                            <h6 class="ltn__secondary-color">//    //</h6>
                            <h4><a href="team-details.html">الاسم</a></h4>
                            <div class="ltn__social-media">
                                <ul>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> --}}
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ltn__team-item">
                        <div class="team-img">
                            <img src="/userSide/img/team/2.jpg" alt="Image">
                        </div>
                        <div class="team-info">
                            <h6 class="ltn__secondary-color">//    //</h6>
                            <h4><a href="team-details.html">الاسم</a></h4>
                            <div class="ltn__social-media">
                                <ul>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> --}}
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ltn__team-item">
                        <div class="team-img">
                            <img src="/userSide/img/team/3.jpg" alt="Image">
                        </div>
                        <div class="team-info">
                            <h6 class="ltn__secondary-color">//    //</h6>
                            <h4><a href="team-details.html">الاسم</a></h4>
                            <div class="ltn__social-media">
                                <ul>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> --}}
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ltn__team-item">
                        <div class="team-img">
                            <img src="/userSide/img/team/4.jpg" alt="Image">
                        </div>
                        <div class="team-info">
                            <h6 class="ltn__secondary-color">//    //</h6>
                            <h4><a href="team-details.html">الاسم</a></h4>
                            <div class="ltn__social-media">
                                <ul>
                                    {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> --}}
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM AREA END -->

    <!-- CALL TO ACTION START (call-to-action-5) -->
    <div class="call-to-action-area call-to-action-5 bg-image bg-overlay-theme-90 pt-40 pb-25 d-none" data-bg="/userSide/img/bg/13.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-5 text-center">
                        <h2 class="white-color text-decoration">24/7 Availability, Make <a href="contact.html">An Appointment</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- PROGRESS BAR AREA START -->
    <div class="ltn__progress-bar-area before-bg-right pt-115 pb-95 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__progress-bar-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// skills</h6>
                            <h1 class="section-title">We Have A Skillest
                                Team Ever<span>.</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="ltn__progress-bar-inner">
                            <div class="ltn__progress-bar-item">
                                <p>Car Repair</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 72%">
                                        <span>72%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Car Rental Service</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 74%">
                                        <span>74%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Car Cleaning & Parts</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 81%">
                                        <span>81%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30" data-bg="/userSide/img/others/5.jpg">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROGRESS BAR AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-4) -->
    {{-- <div class="ltn__testimonial-area section-bg-1 pt-115 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  التوصيات</h6>
                        <h1 class="section-title">مراجعات الزبائن<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="/userSide/img/testimonial/6.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="/userSide/img/testimonial/7.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="/userSide/img/testimonial/1.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="/userSide/img/testimonial/2.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="/userSide/img/testimonial/5.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div> --}}


    {{-- <div class="ltn__testimonial-area section-bg-1 pt-115 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// التوصيات</h6>
                        <h1 class="section-title">مراجعات الزبائن<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                @foreach($reviews as $review)
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="{{ $review->image }}" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>{{ $review->content }}</p>
                            <h4>{{ $review->name }}</h4>
                            <h6>{{ $review->title }}</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    
    
    <!-- TESTIMONIAL AREA END -->

    <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
    {{-- <div class="ltn__faq-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Some Questions</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="accordion_2">
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-1" aria-expanded="false">
                                    How to buy a product?
                                </h6>
                                <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-2" aria-expanded="true">
                                    How can i make refund from your website?
                                </h6>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <div class="ltn__video-img alignleft">
                                            <img src="/userSide/img/bg/17.jpg" alt="video popup bg image">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----" href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&showinfo=0"  data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque </p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-3" aria-expanded="false">
                                    I am a new user. How should I start?
                                </h6>
                                <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-4" aria-expanded="false">
                                    Returns and refunds
                                </h6>
                                <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-5" aria-expanded="false">
                                    Are my details secured?
                                </h6>
                                <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac. Mauris sit amet massa vitae tortor. Quisque id diam vel quam elementum pulvinar. Gravida in fermentum et sollicitudin ac orci phasellus. Facilisis gravida neque convallis a cras semper. Non arcu risus quis varius quam quisque id.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <aside class="sidebar-area ltn__right-sidebar mt-60">
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="/userSide/img/bg/12.png" alt="Banner Image"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- FAQ AREA START -->

    <!-- NEWSLETTER AREA START -->
    {{-- <div class="ltn__newsletter-area section-bg-1 bg-overlay-black-90 pt-110 pb-90 bg-image" data-bg="/userSide/img/bg/2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="ltn__newsletter-inner text-center">
                        <h1 class="white-color">We make your inbox better</h1>
                        <p class="white-color">Sign up to our newsletter to receive grooming tips, style inspiration, <br> exclusive access to pre-launch product pricing and more.</p>
                        <form action="#" class="ltn__form-box">
                            <input type="email" name="email" placeholder="Email*">
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn btn-effect-1 text-uppercase" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- NEWSLETTER AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    {{-- <div class="ltn__blog-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Leatest Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="/userSide/img/blog/1.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Common Engine Oil Problems and Solutions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="/userSide/img/blog/2.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">How and when to replace brake rotors</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="/userSide/img/blog/3.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Elenance, Servicing & Repairs</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>August 22, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="/userSide/img/blog/4.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">He for your First Track Day!</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="/userSide/img/blog/5.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">How te Your Tires Last Longer</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div> --}}
    <!-- BLOG AREA END -->

@endsection

@section('script')

@endsection
