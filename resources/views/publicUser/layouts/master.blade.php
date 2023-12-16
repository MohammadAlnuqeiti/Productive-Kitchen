<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aqaba Kitchens</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('publicUser.layouts.head')

</head>
<body>

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        @include('publicUser.layouts.main-header')




        @yield('content')



        @include('publicUser.layouts.footer')


        @yield('model_area')

    </div>

        @include('publicUser.layouts.footer2')
        
        @include('publicUser.layouts.footer-scripts')



</body>
</html>
