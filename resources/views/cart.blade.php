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
  color:#714423;
  
}
#judul_best_seller{
  font-size:50px !important;
  color:#714423 !important;
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

.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #f1f1f1;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
/* img{
    width: 3.5rem;
} */
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.card .btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.card .btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.card .btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}

#kotaklogin a{
  cursor: pointer;
}

@media (max-width: 576px) { 

  .mobileonly{
    display:block !important;
  }
  #judul_cart{
    font-size:10px;
  }
  #qty_cart{
    font-size:10px;
  }
  #harga_cart{
    font-size:10px;
  }
  #tagline{
    display:none;
  }
  #totalitems{
    font-size:14px !important;
    display:none;
    
  }
  #grandtotal{
    font-size:26px !important;
    display:block;
    margin-top:15px !important;
  }
}
@media (min-width: 576px) { 

.mobileonly{
  display:block  !important;
}

#judul_cart{
    font-size:10px;
  }
  #qty_cart{
    font-size:10px;
  }
  #harga_cart{
    font-size:10px;
  }
  #tagline{
    display:none;
  }
  #totalitems{
    font-size:14px !important;
    display:none;
  }
  #grandtotal{
    font-size:26px !important;
    display:block;
    margin-top:15px !important;
  }
}


@media (min-width: 768px) { 

.mobileonly{
  display:none !important;
}
#judul_cart{
    font-size:12px;
  }
  #qty_cart{
    font-size:14px;
  }
  #harga_cart{
    font-size:14px;
  }
  #tagline{
    display:none;
  }
  #totalitems{
    font-size:14px !important;
    display:none;
  }
  #grandtotal{
    font-size:26px !important;
    display:block;
    margin-top:15px !important;
  }
}


@media (min-width: 992px) { 

.mobileonly{
  display:none !important;
}
#judul_cart{
    font-size:14px;
  }
  #qty_cart{
    font-size:16px;
  }
  #harga_cart{
    font-size:16px;
  }
  #tagline{
    display:block;
  }
  #totalitems{
    font-size:18px !important;
    display:block;
  }
  #grandtotal{
    font-size:30px !important;
    display:block;
    margin-top:15px !important;
  }
}


@media (min-width: 1200px) { 

.mobileonly{
  display:none !important;
}
#judul_cart{
    font-size:14px;
  }
  #qty_cart{
    font-size:16px;
  }
  #harga_cart{
    font-size:16px;
  }
  #tagline{
    display:block;
  }

  #totalitems{
    font-size:18px !important;
    display:block;
  }
  #grandtotal{
    font-size:30px !important;
    display:block;
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
    <div class="container" id = "kotakproduk">
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; " id = "judul_best_seller">Supplier Florist Surabaya  </h1>
      <br>
    
      <div class="row">
        <div class="card">
          <div class="row">
              <div class="col-md-12 cart">
                  <div class="title">
                      <div class="row" >
                          <div class="col"><h4><b>Daftar Keranjang</b></h4></div>
                          <div class="col align-self-center text-right text-muted"><b><span class = "jumlahitem">{{$jumlahitems}}</span></b> items</div>
                      </div>
                  </div>    
            <span id =  "data_cart">
              @foreach($mycart_list as $key => $ml)
              <div class="row border-top border-bottom" id = "kotakcart{{$key}}">
                <div class="row main align-items-center">
                  @if($ml['category'] == 'p')
                    <div class="col-2"><img class="img-fluid" src="{{asset('images/product/'.$ml['image'])}}"></div>
                  @endif
                  @if($ml['category'] == 'v')
                  <div class="col-2"><img class="img-fluid" src="{{asset('images/variant/'.$ml['image'])}}"></div>
                  @endif
                    <div class="col">
                        <div class="row text-muted">{{$ml['variant']}}</div>
                        <div class="row" id = "judul_cart">{{$ml['name']}}</div>
                    </div>
                    <div class="col" id = "qty_cart">
                        <b> {{$ml['qty']}}</b> Items
                    </div>
                    <div class="col" id = "harga_cart">Rp {{number_format($ml['price']-(($ml['price']*$ml['discount'])/100))}} <span class="close" data-idcategory = "{{$ml['category']}}" data-idindex = "{{$ml['index']}}" data-idrow = "{{$key}}" onclick = "deleterowcart(this)">&#10005;</span></div>
                </div>
             </div>
             @endforeach
            </span>
                  <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
              </div>

          </div>
          
      </div>

      </div>
      
  </section>
  <!-- end about section -->

  <!-- why section -->
 

  <div id = "checkoutbar"style = "height:100px;position:fixed;bottom:0;width:100%;background-color:#ffffff;z-index:10000; box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="info_logo" style = "float:left;position:relative; top:20px;left:20px;font-family: 'Baloo Chettan', cursive;">
      <h5 style = "font-size:18px;position:relative;left:60px;color:#512E1B" id = "tagline" >
        Harga Terjangkau - Berkualitas Tinggi
      </h5>
    </div>
      <div style = "float:right;position: relative;right:30px;top:40px;background-color:#512E1B;border-radius:5px;height:30px;width:200px;color:white;text-align:center;font-weight:bold;padding-top:3px;font-size:15px;" onclick = "checkout()">Checkout <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      <div style = " float:right;position: relative;right:50px;top:20px;"><span style = "font-size:18px;" > <span style = "font-size:30px;margin-left:20px;margin-top:10px;" id = "grandtotal">Rp<span class = "total_rupiah">{{number_format($hasil)}}</span></span></div>
  </div>

  

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
function checkout(){
  $.ajax({
        type: "post",
        url: "{{ url('/checkout') }}",
        data: {
          "_token": "{{ csrf_token() }}"
        },
        dataType: "json",
        success: function (response) {
          // console.log(response);
          if(response.status_login == "login"){
            Swal.fire({
                title: "<strong>Checkout</strong>",
                icon: "success",
                html: "Order ID mu Telah terbuat, Order id kamu SFS-"+response.id_transaksi,
                showCloseButton: false,
                showCancelButton: false,
                allowOutsideClick:false,
                focusConfirm: false,
                confirmButtonText: `
                  <i class="fa fa-thumbs-up"></i> Ok
                `,
                confirmButtonAriaLabel: "Ok",
            }).then((result) => {
                $("#data_cart").html("");
                $(".jumlahitem").html("0");
                $(".total_rupiah").html("0");
            });
          }
          else if(response.status_login == "kosong"){
              Swal.fire({
                  title: "<strong>Belum ada produk</strong>",
                  icon: "error",
                  html: `
                  Silahkan pilih produk terlebih dahulu.
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
              
              });
          }
          else{
          
            Swal.fire({
                title: "<strong>Belum Login</strong>",
                icon: "error",
                html: `
                Anda belum login.
                `,
                showCloseButton: false,
                showCancelButton: false,
                allowOutsideClick:false,
                focusConfirm: false,
                confirmButtonText: `
                  <i class="fa fa-thumbs-up"></i> Login Dulu
                `,
                confirmButtonAriaLabel: "Ok",
            }).then((result) => {
              window.open("{{url('/masuk')}}", '_blank');
            });
          }
           
        }
      });
}

function deleterowcart(myobj){
  var id_delete = $(myobj).attr("data-idrow");
  var id_category = $(myobj).attr("data-idcategory");
  var id_index = $(myobj).attr("data-idindex");
  
      $.ajax({
        type: "post",
        url: "{{ url('/deletecart') }}",
        data: {
          "_token": "{{ csrf_token() }}",
          "delete_id" : id_delete,
          "category_id" : id_category,
          "index_id" : id_index
        },
        dataType: "json",
        success: function (response) {
          // console.log(response);
            Swal.fire({
            title: "<strong>Item Dihapus</strong>",
            icon: "success",
            html: `
            Item telah berhasil dihapus.
            `,
            showCloseButton: false,
            showCancelButton: false,
            allowOutsideClick:false,
            focusConfirm: false,
            confirmButtonText: `
              <i class="fa fa-thumbs-up"></i> Ok
            `,
            confirmButtonAriaLabel: "Ok",
          });
        }
      });

  $("#kotakcart"+id_delete).remove();
}
     

</script>