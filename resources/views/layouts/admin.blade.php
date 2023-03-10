<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/img/apple-icon.png')}}">
<link rel="icon" type="image/png" href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/img/favicon.png')}}">

<title>
  
   Halaman Admin 
</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/css/material-dashboard.css')}}" rel="stylesheet" />





  </head>


  <body class="g-sidenav-show  bg-gray-100">


@include('layouts/partials/sidebar')
 <main class="main-content border-radius-lg ">
  @include('layouts/partials/navbar')
  @yield('content')
  </main>
 
  <!--   Core JS Files   -->
<script src="{{asset('assets/material-dashboard-master/material-dashboard-master/assets/js/core/popper.min.js')}}" ></script>
<script src="{{asset('assets/material-dashboard-master/material-dashboard-master/assets/js/core/bootstrap.min.js')}}" ></script>
<script src="{{asset('assets/material-dashboard-master/material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js')}}" ></script>
<script src="{{asset('assets/material-dashboard-master/material-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js')}}" ></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/material-dashboard-master/material-dashboard-master/assets/js/material-dashboard-master/material-dashboard-master.min.js')}}"></script>
  </body>

</html>