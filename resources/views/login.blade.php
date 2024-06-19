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
      
  </style>
	</head>
	<body style="background-image:url('{{asset('images/login/background-login.jpg')}}'); background-size:contain;">
	<section class="ftco-section" style = "padding-top:50px;">
		<div class="container">
	
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex" >
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last" style = "background-color:#F2D2BD !important;background:#714423 !important;" >
							<div class="text w-100">
								<h2>Selamat Datang</h2>
								<p>Belum punya akun?</p>
								<a href="#" class="btn btn-white btn-outline-white">Daftar</a>
                <a href="{{url('/')}}" class="btn btn-white btn-outline-white">Kembali Ke halaman utama</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Masuk</h3>
			      		</div>
								<div class="w-100">
									{{-- <p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p> --}}
								</div>
			      	</div>
							<form action="#" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3" style = "background:#714423">Masuk </button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	{{-- <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked> --}}
									  <span class="checkmark"></span>
										</label>
									</div>
									{{-- <div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div> --}}
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('login/login_v17/js/jquery.min.js')}}"></script>
  <script src="{{asset('login/login_v17/js/popper.js')}}"></script>
  <script src="{{asset('login/login_v17/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('login/login_v17/js/main.js')}}"></script>

	</body>
</html>

