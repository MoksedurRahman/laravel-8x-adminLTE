
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Laravel admin dashboard')</title>

  @include('backend.layouts.partials.styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('admin-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('backend.layouts.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.layouts.partials.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @include('backend.layouts.partials.content-header')
    <!-- /.content-header -->

    <!-- Main content -->
   {{-- @include('backend.layouts.partials.main-content') --}}
   @yield('main-content')
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  @include('backend.layouts.partials.footer') 

  <!-- Control Sidebar -->
  @include('backend.layouts.partials.control-sidebar')
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('backend.layouts.partials.scripts')
@yield('scripts')
</body>
</html>
