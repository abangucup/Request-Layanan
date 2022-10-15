<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
  
  	@include('user.layouts.partials.style')
  
</head>
  
<body>

  @include('user.layouts.partials.header')
  
  @yield('content')
  
  
  @include('user.layouts.partials.footer')
  
  
  @include('user.layouts.partials.script')
  
  
</body>
  
</html>  
  