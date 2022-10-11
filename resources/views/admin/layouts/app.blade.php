<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>

        @yield('title')
    </title>
    @include('admin.layouts.partials.style')


</head>

<body class="g-sidenav-show  bg-gray-200">


    @include('admin.layouts.partials.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.layouts.partials.header')


        <div class="container-fluid py-4">
            @include('sweetalert::alert')

            @yield('content')

            @include('admin.layouts.partials.footer')
        </div>

    </main>

    @include('admin.layouts.partials.script')
</body>

</html>