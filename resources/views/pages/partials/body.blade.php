@if (session('log')==null)
    <script>
      window.location.href = "/";
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title id="mainTitle">Payroll System</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('global.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/template/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/template/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><span class="text-white">PAYROLL SYSTEM</span></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/template/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset('admin/template/assets/images/faces/face9.jpg')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{Session('fullname')}}</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Employees</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('employee')}}"> All Employees </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('roles')}}"> Job roles </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> TimeSheets </a></li>
           
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Global search">
                </form>
              </li>
            </ul>
            <!-- displayed none -->
            <ul class="navbar-nav navbar-nav-right" >
            
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset('admin/template/assets/images/faces/face9.jpg')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Session('fullname')}}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{route('logout')}}">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin/template/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/template/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/template/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('admin/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/template/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/template/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/template/assets/js/misc.js')}}"></script>
    <script src="{{asset('admin/template/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/template/assets/js/todolist.js')}}"></script>
    <script src="{{asset('admin/template/assets/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/template/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>

    <script src="{{asset('admin/template/assets/js/file-upload.js')}}"></script>
    <script src="{{asset('admin/template/assets/js/typeahead.js')}}"></script>
    <script src="{{asset('admin/template/assets/js/select2.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admin/template/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>

<style>
  .select2-selection--single{
    background: gray;
  }
  .table{color:white;}
  .table tbody tr:hover{color: white;}
  .form-control:focus{color:rgb(5, 156, 5);}
  .card-tbl{max-height: 700px; overflow-y: scroll;min-height: 700px;}


  .card-tbl::-webkit-scrollbar {
  width: 12px; /* Width of the entire scrollbar */
}

.card-tbl::-webkit-scrollbar-track {
  background: #fecdea;
  border-radius:5px;
  /* Color of the track (the area behind the thumb) */
}

.card-tbl::-webkit-scrollbar-thumb {
  background-color:var(--primary); /* Color of the thumb (the draggable part of the scrollbar) */
  border-radius: 6px; /* Rounded corners of the thumb */
}

.card-tbl::-webkit-scrollbar-thumb:hover {
  background-color: var(--success); /* Color of the thumb on hover */
}
</style>

@viteReactRefresh
@vite('resources\reactjavascript\src\index.jsx')