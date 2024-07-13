<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supplier Florist Surabaya</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logo.png')}}" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <style>
    body{
      background-color:#F2D2BD !important;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('images/logo-modified.png')}}" style = "width:110px;height:110px;" alt="">
                </a>
                <h1 style = "text-align:center;"> Admin Site</h1>
                <p class="text-center">Selamat datang di admin site supplier florist surabaya</p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="id_username" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="id_pwd">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      {{-- <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label> --}}
                    </div>
                    {{-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> --}}
                  </div>
                  <button id = "login" type= "button" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" style = " background-color:#F2D2BD !important;color:#131312; border:0px;">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    {{-- <p class="fs-4 mb-0 fw-bold">New to Modernize?</p> --}}
                    {{-- <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<script>
  $("#login").click(function (e) { 
    e.preventDefault();
      $.ajax({
      type: "post",
      url: "{{url('/loginadmin')}}",
      data: {
        "_token": "{{ csrf_token() }}",
        "user" : $("#id_username").val(),
        "pass" : $("#id_pwd").val(),
      },
      dataType: "html",
      success: function (response) {
            if(response == "cocok"){
              Swal.fire({
                title: 'Success!',
                text: 'Selamat datang kembali',
                icon: 'success',
                allowOutsideClick:false,
                confirmButtonText: 'OK'
              }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    location.href = "{{url('/adminsite')}}";
                  } 
                });
            }
            else if(response == "tidak cocok"){
              Swal.fire({
                title: 'Salah Password!',
                text: 'Kombinasi passwordmu salah',
                icon: 'error',
                confirmButtonText: 'OK'
              })
              
            }
            else{
              Swal.fire({
                title: 'Tidak Ditemukan!',
                text: 'Akunmu tidak ditemukan',
                icon: 'error',
                confirmButtonText: 'OK'
              })
              
            }
      }
    });
  });

</script>