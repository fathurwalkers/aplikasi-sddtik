<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/base/template') }}/images/favicon.png" />

  <style>
      .font-text-color {
          color: green;
      }
  </style>

</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                            <div class="brand-logo d-flex justify-content-center">
                                {{-- <img src="{{ asset('assets/base/template') }}/images/logo.svg" alt="logo" class="images" width="300px"> --}}
                                <h1 class=""><b><span class="font-text-color">SDIDTK</span></b></h1>
                            </div>
                            {{-- <h6 class="fw-light d-flex justify-content-center">Silahkan Masuk ke Dashboard</h6> --}}
                            
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <form class="pt-0" action="" method="POSt">

                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="mt-3 d-flex justify-content-center">
                                    <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{{ asset('assets/base/template') }}/index.html">
                                        <b>SIGN IN</b>
                                    </a>
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                
                                <div class="text-center mt-4 fw-light">
                                    Sudah punya akun? <a href="{{ route('login') }}" class="text-primary">Masuk disini!</a>
                                </div>

                            </form> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('assets/base/template') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/base/template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/base/template') }}/js/off-canvas.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/template.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/settings.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
