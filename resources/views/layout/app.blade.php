<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Sistem Penjualan Budi Luhur University
    </title>
    <!--     Fonts and icons     -->
   @include('includes.styles')
</head>

<body class="g-sidenav-show dark-version bg-gray-600">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
   @include('includes.navside')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
   @include('includes.header')
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <!-- start the content from here  -->
            @yield('content')
            <!-- end the content here -->
        @include('includes.footer')
        </div>
    </main>
    <!--   Core JS Files   -->
    @include('includes.script')
</body>

</html>