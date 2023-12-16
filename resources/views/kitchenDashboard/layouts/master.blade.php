<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        @include('kitchenDashboard.layouts.head')


    </head>

    <body>

        @include('kitchenDashboard.layouts.main-header')


        @include('kitchenDashboard.layouts.main-sidebar')


        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('kitchen.index')}}">لوحة التحكم</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">@yield('title_page2')</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">@yield('section_title')</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>

                 @yield('content')


                @include('kitchenDashboard.layouts.footer')

            </div>

        </div>
        <!-- end page-wrapper -->


        @include('kitchenDashboard.layouts.footer-scripts')


    </body>

</html>