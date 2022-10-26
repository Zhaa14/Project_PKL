<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/img/apple-icon.png')}}">
<link rel="icon" type="image/png" href="{{ asset('assets/material-dashboard-master/material-dashboard-master/assets/img/favicon.png')}}">

<title>
  
   Material Dashboard 2  by Creative Tim
  

  

  
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
<div class="container"><br><br><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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