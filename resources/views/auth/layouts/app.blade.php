<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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

<body class="bg-gray-200">
    @include('auth.layouts.partials.header')
    @include('sweetalert::alert')

    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100">
            <span class="mask bg-gradient-dark opacity-6"></span>

            @yield('content')

            @include('auth.layouts.partials.footer')
        </div>
    </main>

    @include('admin.layouts.partials.script')
</body>

</html>