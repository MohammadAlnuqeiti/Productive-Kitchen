    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">
            <li>
                <a href="{{route('admin.index')}}"><i class="ti-bar-chart"></i><span>Dashboard</span></a>
            </li>
            {{-- <li>
                <a href="#"><i class="ti-server"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}"><i class="ti-control-record"></i>Dashboard</a></li>
                </ul>
            </li> --}}
            <li>
                <a href="{{route('admin.profile.index')}}"><i class="fas fa-id-card"></i><span>Profile</span></a>
            </li>

            <li>
                <a href="#"><i class="ti-server"></i><span>Admin</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.allAdmin')}}"><i class="ti-control-record"></i>All admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.createAdmin')}}"><i class="ti-control-record"></i>Add new admin</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.allUsers.index')}}"><i class="dripicons-user-group"></i><span>Users</span></a>
            </li>
            <li>
                <a href="#"><i class="ti-server"></i><span>Kitchen</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.kitchens.index')}}"><i class="ti-control-record"></i>Show kitchen</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.kitchens.create')}}"><i class="ti-control-record"></i>Add new kitchen</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="far fa-list-alt"></i><span>Category</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.categories.index')}}"><i class="ti-control-record"></i>Show category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.categories.create')}}"><i class="ti-control-record"></i>Add new category</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="ti-server"></i><span>Products</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.products.index')}}"><i class="ti-control-record"></i>All product</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.products.create')}}"><i class="ti-control-record"></i>Add new product</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.commentsProduct')}}"><i class="fas fa-comment-alt"></i><span>Comments</span></a>
            </li>
            <li>
                <a href="{{route('admin.messages')}}"><i class="fas fa-comment"></i><span>Messages</span></a>
            </li>
            <li>
                <a href="{{route('admin.orders')}}"><i class="ti-bar-chart"></i><span>Orders</span></a>
            </li>


        </ul>
    </div>
    <!-- end left-sidenav-->
