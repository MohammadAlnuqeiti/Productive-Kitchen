        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <ul class="metismenu left-sidenav-menu">
                <li>
                    <li>
                        <a href="{{route('kitchen.index')}}"><i class="ti-bar-chart"></i><span>لوحة التحكم</span></a>
                    </li>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('kitchen.profile.index')}}"><i class="ti-user text-muted mr-2"></i>الملف التعريفي</a>
                </li>

                <li>
                    <a href="#"><i class="ti-server"></i><span>المنتجات</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        {{-- when we call the route here we call like this:{{route('main folder.path in router.method tha we need')}} --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('kitchen.products.index')}}"><i class="ti-control-record"></i>كافة المنتجات</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('kitchen.products.create')}}"><i class="ti-control-record"></i>اضافة منتج جديد</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="ti-server"></i><span>الخصومات</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        {{-- when we call the route here we call like this:{{route('main folder.path in router.method tha we need')}} --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('kitchen.discount.index')}}"><i class="ti-control-record"></i> المنتجات التي عليها خصم</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('kitchen.discount.create')}}"><i class="ti-control-record"></i>اضافة خصم على منتج</a></li>
                    </ul>
                </li>
                <li>
                    <li>
                        <a href="{{route('kitchen.receivingProduct.index')}}"><i class="ti-server"></i><span>استقبال الطلبات على المنتجات</span></a>
                    </li>
                </li>
                
                <li>
                        <a href="{{route('kitchen.orders.index')}}"><i class="mdi mdi-trending-up"></i></i><span>الطلبات</span></a>
                </li>
            </ul>
        </div>
        <!-- end left-sidenav-->