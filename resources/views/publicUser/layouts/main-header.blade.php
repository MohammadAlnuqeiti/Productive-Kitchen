<!-- HEADER AREA START (header-5) -->
<header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-middle-area start -->
    @yield('header_top_sticky')
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            @yield('header_top_logo')
                        </div>
                    </div>
                </div>
                @yield('header_top')
                <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}">الرئيسية</a>
                                    </li>
                                    <li>
                                        <a href="http://127.0.0.1:8000/#kitchen">مطابخنا</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.shop')}}">منتجاتنا</a>
                                    </li>
                                    <!-- <li class="menu-icon"><a href="{{route('user.shop')}}">منتجاتنا</a>
                                        <ul class="mega-menu">
                                            <li><a href="#">Inner Pages</a>
                                                <ul>
                                                    <li><a href="portfolio.html">Gallery</a></li>
                                                    <li><a href="portfolio-2.html">Gallery - 02</a></li>
                                                    <li><a href="portfolio-details.html">Gallery Details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Inner Pages</a>
                                                <ul>
                                                    <li><a href="history.html">History</a></li>
                                                    <li><a href="contact.html">Appointment</a></li>
                                                    <li><a href="locations.html">Google Map Locations</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="product-details.html">Shop details </a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html"><img src="/userSide/img/banner/menu-banner-1.png" alt="#"></a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="{{route('user.about')}}">من نحن</a>
                                    </li>
                                    <li>
                                        <a href="{{route('user.contact')}}">اتصل بنا</a>
                                    </li>
                                    <li class="special-link"><a href="{{route('user.contact')}}">كيف يمكننا مساعدتك</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2">
                 <!-- header-search-1 -->
                        {{-- <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="search-form" method="get" action="{{ route('user.searchProduct') }}">
                                    <input type="text" name="search" value="" placeholder="ابحث هنا ..." />
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div> --}}

                    <!-- user-menu -->
                    <div class="ltn__drop-menu user-menu">
                        <ul>
                            <li>
                                <a href="#"><i class="icon-user"></i></a>
                                <ul>
                                    @if (Route::has('login'))

                                    @auth

                                        @if (Auth()->user()->role=='user')

                                        <li><a href="{{route('user.profile.index')}}">الملف الشخصي</a></li>

                                        @endif

                                        @if (Auth()->user()->role=='admin')

                                        <li><a href="{{route('admin.index')}}">لوحة التحكم</a></li>

                                        @endif

                                        @if (Auth()->user()->role=='kitchen')

                                            <li><a href="{{route('kitchen.index')}}">لوحة التحكم</a></li>


                                        @endif

                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    @else

                                        <li><a href="{{Route ('user.login')}}">تسجيل الدخول</a></li>
                                        <li><a href="{{Route ('user.register')}}">انشاء حساب</a></li>

                                     @endif

                                @endif

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- mini-cart -->

                    <div class="mini-cart-icon">
                        <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                            <i class="icon-shopping-cart"></i>
                            <sup>{{ session('cart') ? count(session('cart')) : 0 }}</sup>
                        </a>
                    </div>

                    <!-- mini-cart -->
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->

</header>
<!-- HEADER AREA END -->

<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">السلة</span>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <?php $total_price = 0; ?>
            {{-- @if(isset($data) && is_array($data) && count($data) > 0)
                @foreach($data as $item)
                    @if(is_array($item) && isset($item['product_id']) && isset($item['product_image']) && isset($item['product_name']) && isset($item['quantity']) && isset($item['is_sale']) && isset($item['product_price']) && isset($item['product_price_discount']))
                        <div class="mini-cart-item clearfix">
                            <div class="mini-cart-img">
                                <a href="{{ route('user.singleProduct', $item['product_id']) }}"><img src="{{ URL::asset('storage/images/' . $item['product_image']) }}" alt="{{ $item['product_name'] }}"></a>
                                <span class="mini-cart-item-delete">
                                    <a href="{{ route('user.cart.destroy', $item['product_id']) }}"><i class="icon-cancel"></i></a>
                                </span>
                            </div>
                            <div class="mini-cart-info">
                                <h6><a href="{{ route('user.singleProduct', $item['product_id']) }}">{{ $item['product_name'] }}</a></h6>
                                <?php $price = $item['is_sale'] == 0 ? $item['product_price'] : $item['product_price_discount']; ?>
                                <span class="mini-cart-quantity">{{ $item['quantity'] }} × {{ $price }} د.أ</span>
                            </div>
                        </div>
                        <?php $total_price += $price * $item['quantity']; ?>
                    @endif
                @endforeach
            @else
                <div class="mini-cart-item clearfix">
                    <p>سلة المشتريات فارغة...</p>
                </div>
            @endif --}}

            <?php         $cart = session()->get('cart'); ?>
            @if ($cart != null)
                @forelse ($cart as $key => $value)
                    @foreach ($allProducts as $item)

                            @if ($key == $item->id)

                                <div class="mini-cart-item clearfix">
                                    <div class="mini-cart-img">
                                        <a href="{{ route('user.singleProduct', $item->id) }}"><img src="{{ URL::asset('storage/images/' . $item->image) }}" alt="{{ $item->name }}"></a>
                                        <span class="mini-cart-item-delete">
                                            <a href="{{ route('user.cart.destroy', $item->id) }}"><i class="icon-cancel"></i></a>
                                        </span>
                                    </div>
                                    <div class="mini-cart-info">
                                        <h6><a href="{{ route('user.singleProduct', $item->id) }}">{{ $item->name }}</a></h6>
                                        <?php $price = $item->is_sale == 0 ? $item->price : $item->price_discount ; ?>
                                        <span class="mini-cart-quantity">{{ $value['quantity'] }} × {{ $price }} د.أ</span>
                                    </div>
                                </div>
                                <?php $total_price += $price * $value['quantity']; ?>

                            @endif

                    @endforeach
                @empty
                    <div class="mini-cart-item clearfix">
                        <p>سلة المشتريات فارغة...</p>
                    </div>
                @endforelse
            @else

                <div class="mini-cart-item clearfix">
                    <p>سلة المشتريات فارغة...</p>
                </div>

            @endif
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>المجموع الفرعي: <span>{{ $total_price }}د.أ </span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="{{ route('user.cart') }}" class="theme-btn-1 btn btn-effect-1">الذهاب الى السلة</a>
                <a href="{{ route('user.checkout.index') }}" class="theme-btn-2 btn btn-effect-2">اتمام عملية الشراء</a>
            </div>
        </div>
    </div>
</div>
<!-- Utilize Cart Menu End -->



<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="{{route('home')}}"><img src="/userSide/img/logoo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li>
                    <a href="{{route('home')}}">الرئيسية</a>
                </li>
                <li>
                    <a href="#kithen">مطابخنا</a>
                </li>
                <li>
                    <a href="{{route('user.shop')}}">منتجاتنا</a>
                </li>
                <!-- <li><a href="#">منتجاتنا</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-grid.html">Shop Grid</a></li>
                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                        <li><a href="product-details.html">Shop details </a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="{{route('user.about')}}">من نحن</a>
                </li>
                <li>
                    <a href="{{route('user.contact')}}">اتصل بنا</a>
                </li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                    @if (Route::has('login'))

                        @auth

                            @if (Auth()->user()->role=='user')
                                <li>
                                    <a href="{{route('user.profile.index')}}" title="My Account">
                                        <span class="utilize-btn-icon">
                                            <i class="far fa-user"></i>
                                        </span>
                                        الملف الشخصي
                                    </a>
                                </li>
                            @endif

                            @if (Auth()->user()->role=='admin')

                            <li>
                                <a href="{{route('admin.index')}}" title="My Account">
                                    <span class="utilize-btn-icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    لوحة التحكم
                                </a>
                            </li>

                            @endif

                            @if (Auth()->user()->role=='kitchen')

                                <li>
                                    <a href="{{route('kitchen.index')}}" title="My Account">
                                        <span class="utilize-btn-icon">
                                            <i class="far fa-user"></i>
                                        </span>
                                        لوحة التحكم
                                    </a>
                                </li>


                            @endif

                            <li>
                                <a href="{{ route('logout') }}" title="تسجيل الخروج" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="utilize-btn-icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </span>
                                    تسجيل الخروج
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        @else

                            <li>
                                <a href="{{Route ('user.login')}}" title="تسجيل الدخول">
                                    <span class="utilize-btn-icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    تسجيل الدخول
                                </a>
                            </li>
                            <li>
                                <a href="{{Route ('user.register')}}" title="انشاء حساب">
                                    <span class="utilize-btn-icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    انشاء حساب
                                </a>
                            </li>

                            @endif

                    @endif

                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        السلة
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>


