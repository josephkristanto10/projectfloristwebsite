<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supplier Florist Surabaya</title>
  <link rel="shortcut icon" href="{{ asset('images/logo-modified.png')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* F2D2BD */
    .sidebar-nav ul .sidebar-item.selected > .sidebar-link, .sidebar-nav ul .sidebar-item.selected > .sidebar-link.active, .sidebar-nav ul .sidebar-item > .sidebar-link.active {
      background-color: #F2D2BD;
      color: #131312;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('adminsite')}}" class="text-nowrap logo-img" style = "text-align:center;margin:auto;">
            <br>
            <img src="{{asset('images/logo-modified.png')}}" style = "width:100px;height:100px;" alt="" />
            <br><br>
            <h3> Admin Site</h3>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('adminsite')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Master</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistcategory')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistproduk')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Produk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistvariant')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Variant Produk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelisttrx')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistuser')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">User</span>
              </a>
            </li>
        
          </ul>
          {{-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="{{asset('admin/assets/images/backgrounds/rocket.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div> --}}
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
         
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Hello {{session()->get("nama_superadmin")}} &nbsp;
                  <img src="{{asset('admin/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
              
              </li>
            </ul>
          </div>
          
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
      
        <div class="row" >
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <h1>Dashboard</h1><br>
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="row w-100" >
                    <div class="col-lg-4" >
                      <!-- Yearly Breakup -->
                      <div class="card overflow-hidden">
                        <a href = "{{url('pagelistproduk')}}">
                        <div class="card-body p-4">
                          <h5 class="card-title mb-9 fw-semibold">Produk</h5>
                          <div class="row align-items-center">
                            <div class="col-12">
                              
                            
                              <h4 class="fw-semibold mb-3">{{$product->count()}} <i class="fa fa-cube" aria-hidden="true"></i>
                              </h4>
                              <i class="fa fa-external-link" aria-hidden="true" style = "position:absolute; right:20px; top:20px;font-size:20px;color:#d68b2d;"></i>
                              <div class="d-flex align-items-center">
                                <div class="me-4">
                                  

                                </div>
                                <div>
                       
                                </div>
                              </div>
                            </div>
                         
                          </div>
                        </div>
                      </a>
                      </div>
                    </div>
                 
                    <div class="col-lg-4">
                      <!-- Monthly Earnings -->
                      <div class="card">
                        <a href = "{{url('pagelistuser')}}">
                        <div class="card-body" >
                          <div class="row alig n-items-start">
                            <div class="col-12">
                              <h5 class="card-title mb-9 fw-semibold">  User </h5>
                              <h4 class="fw-semibold">{{$visitor->count()}} <i class="fa fa-user-circle" aria-hidden="true"></i>
                              </h4>
                              <i class="fa fa-external-link" aria-hidden="true" style = "position:absolute; right:20px; top:20px;font-size:20px;color:#d68b2d"></i>

                              <div class="d-flex align-items-center pb-1">
                                {{-- <span
                                  class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-arrow-down-right text-danger"></i>
                                </span> --}}
                                {{-- <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                <p class="fs-3 mb-0">last year</p> --}}
                              </div>
                            </div>
                         
                          </div>
                        </div>
                      </a>
                        {{-- <div id="earning"></div> --}}
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <!-- Monthly Earnings -->
                      <div class="card">
                        <a href = "{{url('pagelisttrx')}}">
                        <div class="card-body">
                          <div class="row alig n-items-start">
                            <div class="col-12">
                              <h5 class="card-title mb-9 fw-semibold"> Transaksi </h5>
                              <h4 class="fw-semibold mb-3">{{$transaction->count()}} <i class="fa fa-file-text-o" aria-hidden="true"></i>
                              </h4>
                              <i class="fa fa-external-link" aria-hidden="true" style = "position:absolute; right:20px; top:20px;font-size:20px;color:#d68b2d"></i>

                              
                            </div>
                          
                          </div>
                        </div>
                      </a>
                        {{-- <div id="earning"></div> --}}
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <h1>Transaksi Bulan ini</h1>
                <div id="chart"></div> --}}
              </div>
            </div>
          </div>
        
        </div>
      
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
</body>

</html>