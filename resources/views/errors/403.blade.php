<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{ config('app.name', 'Laravel') }} - 403</title>
  <!-- loader-->
  <link href="{{ asset('admin') }}/assets/css/pace.min.css" rel="stylesheet"/>
  <script src="{{ asset('admin') }}/assets/js/pace.min.js"></script>
  <link rel="icon" href="{{ asset('admin') }}/assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('admin') }}/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('admin') }}/assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('admin') }}/assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('admin') }}/assets/css/app-style.css" rel="stylesheet"/>
</head>

<body class="bg-theme bg-theme1">
  <!-- Start wrapper-->
  <div id="wrapper">
    <div class="height-100v d-flex align-items-center justify-content-center">
      <div class="card card-authentication1 mt-5 mb-0">
        <div class="card-body">
          <div class="card-content p-2">
            <div class="card-title text-uppercase pt-3 pb-2 text-center">
              <h1 style="font-size: 100px;">403</h1>
            </div>
            <div class="card-footer text-center py-3">
              @if (auth()->user()->role_id == 3)
                <h5 class="pb-2">Mohon maaf akses ke halaman ini telah dibatasi.</h5>
                <p class="pb-2">Silahkan kembali login menggunakan akun lain.</p>
                <a href="{{ route('logout') }}" class="btn btn-light btn-block mt-3" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="icon-power mr-2"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                {{-- <a href="{{ route('logut') }}" class="btn btn-light btn-block mt-3">Logout</a> --}}
              @else
                <h5 class="pb-2">Mohon maaf akses ke halaman ini telah dibatasi.</h5>
                <p class="pb-2">Silahkan kembali ke dashboard utama.</p>
                <a href="{{ route('home') }}" class="btn btn-light btn-block mt-3">Dashboard</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    
    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">
        <p class="mb-0">Gaussion Texture</p>
        <hr>
        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>
        <p class="mb-0">Gradient Background</p>
        <hr>
        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>
      </div>
    </div>
    <!--end color switcher-->
  </div>
  <!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
  <script src="{{ asset('admin') }}/assets/js/popper.min.js"></script>
  <script src="{{ asset('admin') }}/assets/js/bootstrap.min.js"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('admin') }}/assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('admin') }}/assets/js/app-script.js"></script>
</body>
</html>