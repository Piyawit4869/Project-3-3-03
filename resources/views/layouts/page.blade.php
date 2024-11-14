<!DOCTYPE html>
<html lang="en"><!-- Basic -->

<head>

    @include('include.page.head')

</head>

<body>
    <!-- Start header -->

    @include('include.page.header')

    <!-- End header -->

    @yield('main')

    <!-- Start Footer -->

    @include('include.page.footer')

</body>

</html>
