<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="florist surabaya" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Supplier Florist Surabaya</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="shortcut icon" href="{{ asset('images/logo-modified.png')}}">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />
  <link rel="stylesheet" type="text/css" href = "{{asset('css/font-awesome-4.7.0/css/font-awesome.css')}}"/>
  <link rel="stylesheet" type="text/css" href = "https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css"/>
  <link rel="stylesheet" type="text/css" href = "https://fonts.googleapis.com/css2?family=Exo+2:wght@300;500;700&display=swap"/>
  {{-- @import url("");
  @import url("https://fonts.googleapis.com/css2?family=Exo+2:wght@300;500;700&display=swap"); --}}
  

  <!-- fonts style -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet"> --}}
  
  <!-- Custom styles for this template -->

  <style>
    
    @keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
    @keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
#judul{
  animation: 1s ease-out 0s 1 slideInFromLeft;
  margin-top:15px;
  font-size: 50px !important;
  color:#3A2D28;
  
}
#judul_best_seller{
  font-size:50px !important;
  color:#3A2D28 !important;
}
#pilihbunga{
  border:0px solid black;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  background: linear-gradient(to left, #714423 50%, #E8B865 50%) right;
  background-size: 200%;
  
    transition: .5s ease-out;
    animation: 2s ease-out 0s 1 slideInFromLeft;
}

#pilihbunga:hover{
  background-color:#E3BC9A;
  border-color:#E3BC9A;
  background-position: left;

}

.custom_nav-container.navbar-expand-lg .navbar-nav .nav-item.active .nav-link::after{
  background-color:#714423 !important;
 
}
.nav-link:hover{

  text-underline-offset:8px;
  text-decoration : underline #714423 2px;
}


.main {
  max-width: 1200px;
  margin: 0 auto;
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

.card_image {
  position: relative;
  max-height: 250px;
}

.card_image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card_price {
  position: absolute;
  bottom: 8px;
  right: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 45px;
  height: 45px;
  border-radius: 0.25rem;
  background-color: #c89b3f;
  font-size: 18px;
  font-weight: 700;
}

.card_price span {
  font-size: 12px;
  margin-top: -2px;
}

.note {
  position: absolute;
  top: 8px;
  left: 8px;
  padding: 4px 8px;
  border-radius: 0.25rem;
  background-color: #c89b3f;
  font-size: 14px;
  font-weight: 700;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  position: relative;
  padding: 16px 12px 32px 24px;
  margin: 16px 8px 8px 0;
  max-height: 290px;
  /* overflow-y: scroll; */
}

.card_content::-webkit-scrollbar {
  width: 8px;
}

.card_content::-webkit-scrollbar-track {
  box-shadow: 0;
  border-radius: 0;
}

.card_content::-webkit-scrollbar-thumb {
  background: #c89b3f;
  border-radius: 15px;
}

.card_title {
  position: relative;
  margin: 0 0 24px;
  padding-bottom: 10px;
  text-align: center;
  font-size: 20px;
  font-weight: 700;
}

.card_title::after {
  position: absolute;
  display: block;
  width: 50px;
  height: 2px;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  background-color: #c89b3f;
  content: "";
}

hr {
  margin: 24px auto;
  width: 50px;
  border-top: 2px solid #c89b3f;
}

.card_text p {
  margin: 0 0 24px;
  font-size: 14px;
  line-height: 1.5;
}

.card_text p:last-child {
  margin: 0;
}
#kotaklogin a{
  cursor: pointer;
}

@media (max-width: 576px) { 

.mobileonly{
  display:block !important;
}
#subjudul{
  font-size:13px;
}
}
@media (min-width: 576px) { 

.mobileonly{
  display:block !important;
}
#subjudul{
  font-size:13px;
}
}


@media (min-width: 768px) { 

.mobileonly{
  display:none !important;
}
#subjudul{
  font-size:13px;
}
}


@media (min-width: 992px) { 

.mobileonly{
  display:none !important;
}
}


@media (min-width: 1200px) { 

.mobileonly{
  display:none !important;
}
}

  </style>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />
</head>

<body>

 
  <header class="header_section" style = "padding-top:5px;background-color:#f1f1f1;  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;height:70px;">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{url('/')}}" style = "width:270px;">
          <span style = "color:#714423; font-size:18px;font-family:arial;">
            Supplier Florist Surabaya
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style = "width: 1000px; background-color: #f1f1f1; z-index: 2;margin-left: -20px;margin-right: -20px;">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center"><b>
            <ul class="navbar-nav  ">
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}#kotakproduk"> Product </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/howtoorder')}}"> How to Order <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact us</a>
              </li>
              @if (Session::has('user'))
              <li class="nav-item">
                <a class="nav-link" href="{{url('/invoice-list')}}">My Order</a>
              </li>
              @endif
              <li class="nav-item mobileonly"  style = "display:none;">
                <a class = "nav-link" href="{{url('/cart')}}">
                  <img src="images/cart.png" alt=""> Cart
                </a>
              </li>
              <li class="nav-item mobileonly"  style = "display:none;">
                <span id = "kotaklogin">
                  @if (Session::has('user'))
                  {{-- do something with session key --}}
                  <a class = "nav-link" onclick = "logout()">
                    Log out
                  </a>
                  @else
                  {{-- session key dosen't exist  --}}
                  <a class = "nav-link" href="{{url('/masuk')}}">
                    Log in
                  </a>
                  @endif
                </span>
             
              </li>
            </ul>
          </b>
          </div>
          <div class="quote_btn-container ">
            <span id = "kotaklogin">
              @if (Session::has('user'))
              {{-- do something with session key --}}
              <a onclick = "logout()">
                Log out
              </a>
              @else
              {{-- session key dosen't exist  --}}
              <a href="{{url('/masuk')}}">
                Log in
              </a>
              @endif
            </span>
            <a href="{{url('/cart')}}">
              <img src="images/cart.png" alt="">
            </a>
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- about section -->
  <section class="about_section " style =  "padding-top:30px;">
    {{-- <div class="section_number">
      01
    </div> --}}
    <div class="container" id = "kotakproduk">
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; " id = "judul_best_seller">How to Order?  </h1>
      <h5 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #3A2D28;" id  = "subjudul">Cara untuk Pesan di <b>Supplier Florist Surabaya</b> Lewat Website </h5>
      <div class="row">
        <div class="main">
          <ul class="cards">
            <li class="cards_item" style = "animation: fadeIn 2s;">
              <div class="card">
                <div class="card_image">
                  <img src="{{ asset('images/ho_1.jpg')}}" alt="mixed vegetable salad in a mason jar." />
       
                </div>
                <div class="card_content">
                  <h2 class="card_title">Pilih Barang</h2>
                  <div class="card_text">
                    <p>Kamu bisa memilih dahulu produk yang kamu inginkan lalu tekan add to cart, kalian bisa memilih varian jika tersedia.
                    </p>
                    {{-- <hr /> --}}

                  </div>
                </div>
              </div>
            </li>
        
            <li class="cards_item" style = "animation: fadeIn 4s;" >
              <div class="card">
                <div class="card_image">
                  <img src="{{ asset('images/ho_2.jpg')}}" alt="a Reuben sandwich on wax paper." />
            
                </div>
                <div class="card_content">
                  <h2 class="card_title">Checkout Cart</h2>
                  <div class="card_text">
                    <p>Setelah memilih produk, kamu bisa menuju ke halaman cart atau klik logo keranjang diatas.
                    </p>
                  
                  </div>
                </div>
              </div>
            </li>
        
            <li class="cards_item" style = "animation: fadeIn 3s;">
              <div class="card">
                <div class="card_image">
                  <span class="note">Penting</span>
                  <img src="{{ asset('images/ho_3.jpg')}}" alt="A side view of a plate of figs and berries." />
         
                </div>
                <div class="card_content">
                  <h2 class="card_title">Login dan Transaksi</h2>
                  <div class="card_text">
                    <p>Setelah mengisi data dan login terlebih dahulu, simpan order ID yang tertera setelah checkout. lalu berikan order ID tersebut kepada admin kami. Untuk nomor admin kami bisa <b>klik disini</b>
                    </p>
                   
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      {{-- <div class="credits">
          <a target="_blank" href="https://www.freepik.com/premium-vector/vector-infographic-design-template-with-icons-8-options-steps_10571883.htm">inspired by</a>
      </div> --}}
            {{-- </div> --}}
          
            {{-- <div style = "margin:auto;width:100%;text-align:center;"><button class = "btn btn-primary" style = "background-color:#714423 !important;padding:10px;margin:auto; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">Lihat Semua Produk <i class="fa fa-chevron-right" aria-hidden="true"></i></button></div> --}}
      </div>
      
  </section>
  <!-- end about section -->



  <!-- end why section -->

 

  <!-- end map section -->

  <!-- info section -->
  <!-- info section -->
  <section class="info_section layout_padding" style  = "background-color: #E3BC9A;color:#3A2D28 !important;">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
       
        </div>
       
        <div class="col-md-6">
          <div class="info_contact">
            <h5>
              JAM OPERASIONAL
            </h5>
       
          <p>Senin - Sabtu : 08.00 - 16.00 </p>
         <p> Tgl merah & hari minggu tutup</p>
          </div>
        </div>
     
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              CONTACT
            </h5>
         
            <div style = "color:#3A2D28">
              <img src="images/location-white.png" alt="" >
             <u><a href = "https://www.google.com/maps?ll=-7.236819,112.729736&z=16&t=m&hl=en&gl=ID&mapclient=embed&q=Jl.+Kawung+II+No.1+Kemayoran+Kec.+Krembangan+Surabaya,+Jawa+Timur+60176" style = "color:#3A2D28;">
              <p>
               Jl.Kawung II no 1
              </p>
            </a>
          </u>
            </div>
          </a>
            <div>
              <img src="images/telephone-white.png" alt="">
              <p>
               <u> <a style = "color:#3A2D28;" href = "https://wa.me/+6285161116235?text=Halo%2C%20Saya%20klik%20ini%20dari%20website%20supplierfloristsurabaya.%20Saya%20mau%20bertanya.">Admin - 1</a></u>

                
              </p>
            </div>
            <div>
              <img src="images/telephone-white.png" alt="">
              <p>
                <u><a style = "color:#3A2D28;" href = "https://wa.me/+6285175388547?text=Halo%2C%20Saya%20klik%20ini%20dari%20website%20supplierfloristsurabaya.%20Saya%20mau%20bertanya.">Admin - 2</a></u>

                
              </p>
            </div>

            {{-- <div>
              <img src="images/envelope-white.png" alt="">
              <p>
                sfs@gmail.com
              </p>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section" style = "background-color:#E3BC9A;color:#3A2D28 !important;">
    <p style = "color:#3A2D28 !important;">
      &copy; 2024 Supplier Florist Surabaya
    </p>
  </footer>
  <!-- footer section -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
<script>

function logout(){
  $.ajax({
    type: "get",
    url: "{{ url('/keluar') }}",
    data: {
      "keluar": "ok",
    },
    dataType: "html",
    success: function (response) {
      // console.log(response);
        Swal.fire({
        title: "<strong>Log Out</strong>",
        icon: "success",
        html: `
          Anda telah logout, Silahkan login kembali.
        `,
        showCloseButton: false,
        showCancelButton: false,
        allowOutsideClick:false,
        focusConfirm: false,
        confirmButtonText: `
          <i class="fa fa-thumbs-up"></i> Ok
        `,
        confirmButtonAriaLabel: "Ok",
      }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            var urllogin = "<a href={{url('/masuk')}}>Log in</a>";
            $("#kotaklogin").html(urllogin);
          } 
        });
    }
  });
}
     

</script>