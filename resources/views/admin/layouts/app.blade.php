<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title> Resume Builder Pannel </title>
     @include('admin.layouts.css')
  </head>
  <body class="g-sidenav-show  bg-gray-100">
    @include('admin.layouts.sidebar')
    <main class="main-content border-radius-lg ">
      @include('admin.layouts.header')
      <div class="container-fluid py-4">
        @yield('content')
        @include('admin.layouts.footer')
      </div>
    </main> 
    {{-- @include('admin.layouts.setting') --}}
    @include('admin.layouts.js')
  </body>
</html>