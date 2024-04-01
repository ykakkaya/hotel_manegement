<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hotel Menagement System </title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('spica/spica/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('spica/spica/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('spica/spica/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('spica/spica/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
 @include('admin.layouts.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
     @include('admin.layouts.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         @yield('master_content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        @include('admin.layouts.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{asset('spica/spica/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('spica/spica/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('spica/spica/js/off-canvas.js')}}"></script>
  <script src="{{asset('spica/spica/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('spica/spica/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('spica/spica/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
