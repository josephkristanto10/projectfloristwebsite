<!doctype html>
<html lang="en">
  <head>
  	<title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('login/login_v17/css/style.css')}}">
  <style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");
* {
  box-sizing: border-box;
}

.containers h1 {
  font-weight: bold;
  margin: 0;
 
}

.containers h2 {
  text-align: center;
}

.containers p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

.containers span {
  font-size: 12px;
}

.containers a {
  color: #333 !important;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

.containers button {
  border-radius: 20px;
  border: 1px solid #303030;
  background-color: #303030;
  color: #ffffff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: all 200ms ease-in;
}

.containers button:active {
  transform: scale(0.95);
}

.containers button:focus {
  outline: none;
}

.containers button.ghost {
  background-color: transparent;
  border-color: #ffffff;
  transition: all 200ms ease-in;
}
.containers button.ghost:hover {
  background-color: #ffffff;
  border-color: #ffffff;
  color: #303030;
}
.button-sign-in:hover {
  background-color: #f6b14b;
  border-color: #f6b14b;
}
.containers form {
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

.containers input {
  background-color: #f6f6f6;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}
.containers select {
  background-color: #f6f6f6;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.containers {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
    0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  height: 83vh;
  width: 75%;
  max-width: 100%;
  min-height: 480px;
}

.containers .form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.containers .sign-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.containers.right-panel-active
  .sign-in-container {
  transform: translateX(100%);
}

.containers .sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.containers.right-panel-active
  .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }
  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.containers .overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.containers.right-panel-active
  .overlay-container {
  transform: translateX(-100%);
}

.overlay {
  background: #3A2D28;
  background: -webkit-linear-gradient(
    to right,
    #3A2D28,
    #3A2D28
  );
  background: linear-gradient(
    to right,
    #3A2D28,
    #3A2D28
  );
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #ffffff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.containers.right-panel-active .overlay {
  transform: translateX(50%);
}

.containers .overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.containers.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.containers.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.containers .social-container {
  margin: 20px 0;
}

.containers .social-container a {
  border: 1px solid #dddddd;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}

/* body {
  background-image: url("https://griyamu.com/assets/image/properti_page/login_page_bg.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
} */

.or {
  display: flex;
  flex-direction: row;
}

.or:before,
.or:after {
  content: "";
  flex: 1 1;
  border-bottom: 1px solid;
  opacity: 50%;
  margin: auto;
}

.or:before {
  margin-right: 10px;
}

.or:after {
  margin-left: 10px;
}

#register_mobile3
  .btn-check:active
  + .btn-outline-warning,
.btn-check:checked + .btn-outline-warning,
.btn-outline-warning.active,
.btn-outline-warning.dropdown-toggle.show,
.btn-outline-warning:active {
  background-color: #3A2D28 !important;
}

.btn-outline-warning {
  color: #ffc107;
  background-color: transparent !important;
  background-image: none;
  border: 2px solid #ffc107 !important;
}

.btn-outline-warning:hover {
  color: #ffc107;
  background-color: transparent !important;
  background-image: none;
}



/* Mobile */

@import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");
* {
  box-sizing: border-box;
}

.containers h1 {
  font-weight: bold;
  margin: 0;
}

.containers h2 {
  text-align: center;
}

.containers p {
  font-size: 14px;
  font-weight: 100;
  line-height: 20px;
  letter-spacing: 0.5px;
  margin: 20px 0 30px;
}

.containers span {
  font-size: 12px;
}

.containers a {
  color: #333 !important;
  font-size: 14px;
  text-decoration: none;
  margin: 15px 0;
}

.containers button {
  border-radius: 20px;
  border: 1px solid #303030;
  background-color: #303030;
  color: #ffffff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: all 200ms ease-in;
}

.containers button:active {
  transform: scale(0.95);
}

.containers button:focus {
  outline: none;
}

.containers button.ghost {
  background-color: transparent;
  border-color: #ffffff;
  transition: all 200ms ease-in;
}
.containers button.ghost:hover {
  background-color: #ffffff;
  border-color: #ffffff;
  color: #303030;
}
.button-sign-in:hover {
  background-color: #f6b14b;
  border-color: #f6b14b;
}
.containers form {
  background-color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

.containers input {
  background-color: #f6f6f6;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}
.containers select {
  background-color: #f6f6f6;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.containers {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
    0 10px 10px rgba(0, 0, 0, 0.22);
  position: relative;
  overflow: hidden;
  height: 83vh;
  width: 75%;
  max-width: 100%;
  min-height: 480px;
}

.containers .form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.containers .sign-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.containers.right-panel-active
  .sign-in-container {
  transform: translateX(100%);
}

.containers .sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.containers.right-panel-active
  .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%,
  49.99% {
    opacity: 0;
    z-index: 1;
  }
  50%,
  100% {
    opacity: 1;
    z-index: 5;
  }
}

.containers .overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.containers.right-panel-active
  .overlay-container {
  transform: translateX(-100%);
}

.overlay {
  background: #3A2D28;
  background: -webkit-linear-gradient(
    to right,
    #3A2D28,
    #3A2D28
  );
  background: linear-gradient(
    to right,
    #3A2D28,
    #3A2D28
  );
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #ffffff;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.containers.right-panel-active .overlay {
  transform: translateX(50%);
}

.containers .overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.containers.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.containers.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.containers .social-container {
  margin: 20px 0;
}

.containers .social-container a {
  border: 1px solid #dddddd;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
}

body {
  background-image: url("https://griyamu.com/assets/image/properti_page/login_page_bg.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.or {
  display: flex;
  flex-direction: row;
}

.or:before,
.or:after {
  content: "";
  flex: 1 1;
  border-bottom: 1px solid;
  opacity: 50%;
  margin: auto;
}

.or:before {
  margin-right: 10px;
}

.or:after {
  margin-left: 10px;
}

#register_mobile3
  .btn-check:active
  + .btn-outline-warning,
.btn-check:checked + .btn-outline-warning,
.btn-outline-warning.active,
.btn-outline-warning.dropdown-toggle.show,
.btn-outline-warning:active {
  background-color: #ffc107 !important;
}

.btn-outline-warning {
  color: #ffc107;
  background-color: transparent !important;
  background-image: none;
  border: 2px solid #ffc107 !important;
}

.btn-outline-warning:hover {
  color: #ffc107;
  background-color: transparent !important;
  background-image: none;
}

@media (max-width: 576px) { 
  #login_desktop{
        display:none;
    }
    #login_mobile{
    display:block;
  }
 }
@media (min-width: 576px) { 
  #login_desktop{
        display:none;
    }
    #login_mobile{
    display:block;
  }
  #judul_create_account{
    font-size:20px;
  }
 }


@media (min-width: 768px) { 
  #login_desktop{
        display:block;
    }
    #login_mobile{
    display:none;
  }
 }


@media (min-width: 992px) { 
  #login_desktop{
        display:block;
    }
    #login_mobile{
    display:none;
  }
 }


@media (min-width: 1200px) { 
  #login_desktop{
        display:block;
    }
  #login_mobile{
    display:none;
  }

 }

  </style>


	</head>
	<body style="background-image:url('{{asset('images/login/background-login.jpg')}}'); background-size:contain;">

		<div id = "login_desktop" class="outer-container mt-2 mb-5 desktop " style="width:100%;padding:10px;">
			<div class="containers right-panel-active" id="containers" style="margin:auto;margin-top:50px;">
				<div class="form-container sign-up-container">
					<form class="form_register" method="POST" enctype="multipart/form-data" style="align-items:baseline;text-align:left;">
						<h1 id = "judul_create_account" class="title-creat-account">Create Account</h1>
						<span class="title-creat-account2">or use your email for registration</span><br>
						<!-- register 1 -->
						<div id="register1" style="display:block;">
					
							<input style="font-size:12px;"  type="text" placeholder="Name" name="nama" id = "input_register_nama" required>
              <input style="font-size:12px;"  type="text" placeholder="Alamat" name="nama" id = "input_register_alamat" required>
              <input style="font-size:12px;"  type="text" placeholder="WA : contoh (083854942164)"  id = "input_register_Wa" required>
							<input style="font-size:12px;"  type="email" placeholder="Email : contoh (bambangsupriyatno@gmail.com)"  id = "input_register_email" required>
							<input style="font-size:12px;"  type="password" placeholder="Password"  id = "input_register_pass" required><br><br>
							<button class="button-sign-in" type = "button" onclick = "register()">Daftar </button>
						</div>
					
					
					</form>
				</div>
		
				<div class="form-container sign-in-container">
					<form class="form_login" enctype="multipart/form-data" style="align-items:baseline;" action = "">
						<h1 style="margin-bottom:10px;">Sign in <i style="font-size:35px;" class="fas fa-door-open"></i></h1><br>
						<input style="font-size:12px;" type="email" placeholder="Email" name="email" required="" id = "emaillogin">
						<input style="font-size:12px;" class="password_login" type="password" placeholder="Password" name="password" id = "pwd" required="">
						{{-- <span style="cursor: pointer;" class="show_password_login"><i class="fas fa-eye"></i>&nbsp; Show Password</span><br> --}}
		
						<button id="loginbutton" class="button-sign-in" style="margin-top:10px;" type = "button" >Sign In</button>
					</form>
				</div>
		
				<div class="overlay-container" >
					<div class="overlay">
						<div class="overlay-panel overlay-left" >
							<h1 style = "color:white !important;">Supplier Florist Surabaya</h1><br>
							<p> <span style="font-weight:300;color:white !important;" >Silahkan daftar agar bisa checkout di supplier florist surabaya</span></p>
							<button class="ghost" id="signIn" type = "button" >Masuk</button>
						</div>
						<div class="overlay-panel overlay-right">
							<h1 style = "color:white !important;">Supplier Florist Surabaya</h1><br>
							<p style="font-weight:200;color:white !important;"> Silahkan login agar bisa checkout di supplier florist surabaya</p>
							<button class="ghost" id="signUp">Daftar Disini</button><br><br>
							<a href = "{{url('/')}}"><button class="ghost" id="signUp">Kembali Ke Halaman Utama</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>


    <div id = "login_mobile" class="outer-container mt-5 mb-5 mobile" style="width:100%;padding:10px;height:100%;">
      <!-- LOGIN -->
      <div class="containers login-mobile" id="containers" style="width:90%;height: 100%;margin:auto;margin-top:50px;">
          <div class="radius-5" style="padding:0px;">
              <div style="background-color: #3A2D28;padding:20px 20px 1px 20px;color:white !important;">
                  <h1 style = "color:white !important">
                    Supplier Florist Surabaya
                      <hr>
                      <p style="font-size:20px;"> &nbsp;Login Page</p>
                  </h1>
              </div>
  
              <form class="form_login" enctype="multipart/form-data" style="align-items:baseline;padding: 0 30px;">
                  <input class="form-control" style = "box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);background-color:white;" type="email" placeholder="Email" name="email" id = "emaillogin_mobile" required />
                  <input class="form-control" style = "box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);background-color:white;" type="password"  id = "pwd_mobile" placeholder="Password" name="password" required />
                  {{-- <span style="cursor: pointer;" id="show_password_login_mobile"><i class="fas fa-lock-open"></i>&nbsp; Show Password</span><br> --}}
                  <br><br><br>
                  <button id="loginbutton_mobile"  class="btn btn-warning float-end"  style = "margin-top:10px;" type = "button">Sign In</button>
                  <p id="belum_punya_akun" style="font-weight:200;font-size:13px;">Belum Punya Akun ?</p>
              </form>
          </div>
      </div>
  
      <!-- REGISTER -->
      <div class="containers register-mobile" id="containers" style="height: 100%;width:90%;margin:auto;margin-top:50px;display:none;">
          <div class="radius-5" style="padding:0px;">
              <div style="background-color: #3A2D28;padding:20px 20px 1px 20px;color:white !important;">
                  <h1 style = "color:white !important">
                      Supplier Florist Surabaya
                      <hr>
                      <p style="font-size:20px;"> &nbsp;Register Page</p>
                  </h1>
              </div><br>
  
              <form class="form_register" method='POST' enctype="multipart/form-data" style="align-items:baseline;padding: 0px 30px;">
                  <!-- register mobile 1 -->
                  <div id="register_mobile1" style="text-align:left;">
                    <input style="font-size:12px;"  type="text" placeholder="Name" name="nama" id = "input_register_nama_mobile" required>
                    <input style="font-size:12px;"  type="text" placeholder="Alamat" name="nama" id = "input_register_alamat_mobile" required>
                    <input style="font-size:12px;"  type="text" placeholder="WA : contoh (083854942164)"  id = "input_register_Wa_mobile" required>
                    <input style="font-size:12px;"  type="email" placeholder="Email : contoh (bambangsupriyatno@gmail.com)"  id = "input_register_email_mobile" required>
                    <input style="font-size:12px;"  type="password" placeholder="Password"  id = "input_register_pass_mobile" required><br><br>
                    <button class="button-sign-in" type = "button" onclick = "register_mobile()">Daftar </button>
                      {{-- <button id="next_mobile1" class="btn btn-warning mt-3" style="padding-left:30px;padding-right:30px;">Lanjutkan <i class="fas fa-chevron-right"></i></button> --}}
                  </div>
           
                  <p id="sudah_punya_akun" style="font-weight:200;font-size:13px;">Sudah Punya Akun ?</p>
              </form>
          </div>
      </div>
  </div>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	{{-- <script src="{{asset('login/login_v17/js/jquery.min.js')}}"></script>
  <script src="{{asset('login/login_v17/js/popper.js')}}"></script>
  <script src="{{asset('login/login_v17/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('login/login_v17/js/main.js')}}"></script> --}}

 

	</body>
</html>
<script>
	const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('containers');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
  function register_mobile(){

var register_nama = $("#input_register_nama_mobile").val();
    var register_alamat = $("#input_register_alamat_mobile").val();
    var register_wa = $("#input_register_Wa_mobile").val();
    var register_email = $("#input_register_email_mobile").val();
    var register_pass = $("#input_register_pass_mobile").val();

      $.ajax({
            type: "post",
            url: "{{ url('/register') }}",
            data: {
            "_token": "{{ csrf_token() }}",
            "mynama" : register_nama,
            "myalamat" : register_alamat,
            "mywa" : register_wa,
            "myemail" : register_email,
            "mypwd" : register_pass
            },
            dataType: "json",
            success: function (response) {
              if(response.status_register == "ok"){
                Swal.fire({
                  title: 'Success!',
                  text: 'Selamat, akun anda berhasil terbuat. ',
                  icon: 'success',
                  allowOutsideClick:false,
                  confirmButtonText: 'OK'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                   
                    $(".form_register input" ).val("");
                    $(".form_register").trigger("reset");
                    signInButton.click();
                  });
              }
              else if(response.status_register == "terpakai"){
                Swal.fire({
                  title: 'Daftar Gagal!',
                  text: 'E-mail sudah pernah dipakai',
                  icon: 'error',
                  confirmButtonText: 'OK'
                })
              }
              else if(response.status_register == "datakosong"){
                Swal.fire({
                  title: 'Data Kosong!',
                  text: 'ada data yang belum diisi',
                  icon: 'error',
                  confirmButtonText: 'OK'
                })
              }
              else{
                Swal.fire({
                  title: 'Error!',
                  text: 'Hubungi Developer',
                  icon: 'error',
                  confirmButtonText: 'OK'
                })
              }
             
            }
          });
  
  }
	function register(){
    var register_nama = $("#input_register_nama").val();
    var register_alamat = $("#input_register_alamat").val();
    var register_wa = $("#input_register_Wa").val();
    var register_email = $("#input_register_email").val();
    var register_pass = $("#input_register_pass").val();

      $.ajax({
            type: "post",
            url: "{{ url('/register') }}",
            data: {
            "_token": "{{ csrf_token() }}",
            "mynama" : register_nama,
            "myalamat" : register_alamat,
            "mywa" : register_wa,
            "myemail" : register_email,
            "mypwd" : register_pass
            },
            dataType: "json",
            success: function (response) {
              if(response.status_register == "ok"){
                Swal.fire({
                  title: 'Success!',
                  text: 'Selamat, akun anda berhasil terbuat. ',
                  icon: 'success',
                  allowOutsideClick:false,
                  confirmButtonText: 'OK'
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                   
                    $(".form_register input" ).val("");
                    $(".form_register").trigger("reset");
                    signInButton.click();
                  });
              }
              else if(response.status_register == "terpakai"){
                Swal.fire({
                  title: 'Daftar Gagal!',
                  text: 'E-mail sudah pernah dipakai',
                  icon: 'error',
                  confirmButtonText: 'OK'
                })
              }
              else if(response.status_register == "datakosong"){
                Swal.fire({
                  title: 'Data Kosong!',
                  text: 'ada data yang belum diisi',
                  icon: 'error',
                  confirmButtonText: 'OK'
                })
              }
              else{
                Swal.fire({
                  title: 'Error!',
                  text: 'Hubungi Developer',
                  icon: 'error',
                  confirmButtonText: 'OK'
                })
              }
             
            }
          });
  }
	$("#loginbutton").on("click", function(event){
		// alert("test");
   
     event.preventDefault()
		var myemail = $("#emaillogin").val();
		var mypwd = $("#pwd").val();
		$.ajax({
			type: "post",
			url: "{{ url('/logincheck') }}",
			data: {
			"_token": "{{ csrf_token() }}",
			"myemail" : myemail,
			"mypwd" : mypwd
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
                location.href = "{{url('/')}}";
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
      return true;
    });
	
	// container.classList.add("right-panel-active");


  $("#loginbutton_mobile").on("click", function(event){
		// alert("test");
   
     event.preventDefault()
		var myemail = $("#emaillogin_mobile").val();
		var mypwd = $("#pwd_mobile").val();
		$.ajax({
			type: "post",
			url: "{{ url('/logincheck') }}",
			data: {
			"_token": "{{ csrf_token() }}",
			"myemail" : myemail,
			"mypwd" : mypwd
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
                location.href = "{{url('/')}}";
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
      return true;
    });
  


</script>
<script>
  $("#belum_punya_akun").click(function (e) {
    e.preventDefault();
    $(".login-mobile").fadeOut(
        "slow",
        function () {
            $(".register-mobile").fadeIn("slow");
        }
    );
});
$("#sudah_punya_akun").click(function (e) {
    e.preventDefault();
    $(".register-mobile").fadeOut(
        "slow",
        function () {
            $(".login-mobile").fadeIn("slow");
        }
    );
});


</script>

