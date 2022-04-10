<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ env('APP_NAME') }} - @yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/base/template') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/base/template') }}/{{ asset('assets/base/template') }}/images/favicon.png" />
  <style>
    .sidebar .nav .nav-item.active > .nav-link {
        background: #F4F5F7!important;
        position: relative;
        font-weight: bold;
        font-size: 13px;
    }
  </style>
  @stack('css')

</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{ asset('assets/base/template') }}/images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{ asset('assets/base/template') }}/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>

      {{-- <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"> <span class="text-black fw-bold" style="color: rgb(46, 178, 26);">APLIKASI SDIDTK</span></h1>
            <h3 class="welcome-sub-text">Stimulasi, Deteksi dan Intervensi Dini Tumbuh Kembang Anak </h3>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div> --}}

      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text"> <span class="text-black fw-bold" style="color: rgb(46, 178, 26);">APLIKASI SDIDTK</span></h1>
            <h3 class="welcome-sub-text">Stimulasi, Deteksi dan Intervensi Dini Tumbuh Kembang Anak </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          
          {{-- <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li> --}}
          
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('assets/base/template') }}/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ asset('assets/base/template') }}/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{ $users->login_nama }}</p>
                <p class="fw-light text-muted mb-0">{{ $users->login_email }}</p>
              </div>
              <a class="dropdown-item" href="{{ route('profile') }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Profil Saya</a>

              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item" type="submit"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Keluar</button>
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>

    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item nav-category">Menu Beranda</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Profil Pengguna</span>
            </a>
          </li>
      
          <li class="nav-item nav-category">JENIS PELAYANAN</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('deteksi-penyimpangan-pertumbuhan') }}">
              <i class="menu-icon mdi mdi-baby"></i>
              <span class="menu-title">Deteksi Dini <br> Penyimpangan<br> Pertumbuhan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('deteksi-penyimpangan-perkembangan') }}">
              <i class="menu-icon mdi mdi-baby"></i>
              <span class="menu-title">Deteksi Dini <br> Penyimpangan<br> Perkembangan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('deteksi-penyimpangan-mental') }}">
              <i class="menu-icon mdi mdi-baby"></i>
              <span class="menu-title">Deteksi Dini <br> Penyimpangan<br> Mental Emosional</span>
            </a>
          </li>
  

          {{-- 
          <li class="nav-item nav-category">TES & DETEKSI</li>
          <li class="nav-item">
            <a class="nav-link" href="TDL.html">
              <i class="menu-icon mdi mdi-eye"></i>
              <span class="menu-title">Test Daya Lihat (TDL)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="ddgp.html">
              <i class="menu-icon mdi mdi-baby"></i>
              <span class="menu-title">Deteksi Dini Gangguan <br> pertumbuhan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="DDPPA.html" >
              <i class="menu-icon mdi mdi-stethoscope"></i>
              <span class="menu-title">DeteksiDini Penyimpangan<br>Perkembangan Anak</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="TDD.html">
              <i class="menu-icon mdi mdi-voice"></i>
              <span class="menu-title">Test Daya Dengar (TDD)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="DDPPE.html">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">DeteksiDini Penyimpangan<br>Perilaku dan Emosional</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="DAPA.html">
              <i class="menu-icon mdi mdi-baby-buggy"></i>
              <span class="menu-title">Deteksi Dini Autis <br> Pada Anak</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="GGPH.html">
              <i class="menu-icon mdi mdi-heart"></i>
              <span class="menu-title">Deteksi Dini GPPH</span>
            </a>
          </li>

          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" href="" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div>
          </li>
          --}}

        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom"></div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 

                                {{-- <div class="container"> --}}

                                    <div class="row">
                                      <div class="col-sm-12 col-md-12 col-lg-12">
                                          @if (session('status'))
                                              <div class="alert alert-success">
                                                  {{ session('status') }}
                                              </div>
                                          @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12 grid-margin stretch-card d-none d-md-flex">
                                            <div class="card">

                                                  <div class="card-body">
                                                      <div class="row">
            
                                                          <div class="col-sm-8 col-md-8 col-lg-8">
                                                              <h2 class="card-title"><b> &nbsp; @yield('main-header')</b></h2>
                                                          </div>
            
                                                          <div class="col-sm-4 col-md-4 col-lg-4 float-right d-flex justify-content-end">
                                                              <form action="{{ route('dashboard') }}" method="GET">
                                                                @csrf
                                                                  <button type="submit" class="btn btn-md btn-danger">
                                                                    <b>Kembali</b>
                                                                  </button> 
                                                                  &nbsp;
                                                              </form>
                                                          </div>
                                                        
                                                      </div>
                                                  
                                                      @yield('main-content')
                                  
                                                  </div>
                              
                                            </div>
                                        </div>
                                    </div>

                                {{-- </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('assets/base/template') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/base/template') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('assets/base/template') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('assets/base/template') }}/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/base/template') }}/js/off-canvas.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/template.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/settings.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/base/template') }}/js/dashboard.js"></script>
  <script src="{{ asset('assets/base/template') }}/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  @stack('js')

</body>

</html>

