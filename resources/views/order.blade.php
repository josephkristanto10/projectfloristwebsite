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
img{
    width: 3.5rem;
}
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

.lihat_detail:hover{
  color:#131312 !important;
  background-color:#CBAD8D !important;
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
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; " id = "judul_best_seller">Daftar Invoice  </h1>
      <br>
    
      <div class="row">
        <div class="card">
          <div class="row">
              <div class="col-md-12 cart">
                  <div class="title">
                      <div class="row" >
                          <div class="col"><h4 ><b>Daftar Pesanan</b></h4></div>
                          <div class="col align-self-center text-right text-muted" style  = "color:#3A2D28 !important; "><b><span class = "jumlahitem" >{{$transactions->count()}}</span></b> Pesanan</div>
                      </div>
                  </div>    
            <span id =  "data_cart">
              @include('invoice_list')
               
            </span>
                  <div class="back-to-shop"><a href="{{url('/')}}/#kotakproduk">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
              </div>

          </div>
          
      </div>

      </div>
      
  </section>
  <!-- end about section -->

  



  

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
       
        </div>
       
        <div class="col-md-6">
          <div class="info_contact">
            <h5>
              Jam operasional
            </h5>
       
          <p>Senin - Sabtu : 08.00 Pagi - 16.00 Sore</p>
         <p> Kecuali Tgl merah & hari minggu tutup</p>
          </div>
        </div>
     
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Contact
            </h5>
         
            <div>
              <img src="images/location-white.png" alt="">
             <u><a href = "https://www.google.com/maps?ll=-7.236819,112.729736&z=16&t=m&hl=en&gl=ID&mapclient=embed&q=Jl.+Kawung+II+No.1+Kemayoran+Kec.+Krembangan+Surabaya,+Jawa+Timur+60176" style = "color:white;">
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
               <u> <a style = "color:white;" href = "https://wa.me/+6285161116235?text=Halo%2C%20Saya%20klik%20ini%20dari%20website%20supplierfloristsurabaya.%20Saya%20mau%20bertanya.">Admin - 1</a></u>

                
              </p>
            </div>
            <div>
              <img src="images/telephone-white.png" alt="">
              <p>
                <u><a style = "color:white;" href = "https://wa.me/+6285175388547?text=Halo%2C%20Saya%20klik%20ini%20dari%20website%20supplierfloristsurabaya.%20Saya%20mau%20bertanya.">Admin - 2</a></u>

                
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


   {{-- Modal Varian --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style = "z-index:100000;" >
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="judulproduk" ><i class="fa fa-list-alt" aria-hidden="true"></i>
             Detail Invoice</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <h4>Informasi Invoice</h4>
          <div style = "margin-left:10px;">
          <p>No Invoice : <span id = "modal_invoice_id"></span> </p>
          <p>Tanggal Invoice : <span id = "modal_invoice_tanggal_invoice"></span> </p>
          <p>Grand Total : <span id = "modal_invoice_grand_total"></span> </p>
          </div>

          <h4>Daftar Item</h4>
          <div id = "data_variant" >
            
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
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

$(document).on('click', '.mylinks a', function(event){
 
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];

 fetch_data(page);
});

function fetch_data(page)
{
 $.ajax({
  url:"/pagination/fetch_data_invoice?page="+page,
  success:function(data)
  {
   $('#data_cart').html(data);
  }
 });
}


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


function getInvoiceDetail(myobj){
 var data_trans =  $(myobj).attr("data-trans");
  $.ajax({
    type: "get",
    url: "{{ url('/invoice-detail') }}",
    data: {
      "idtrans": data_trans,
    },
    dataType: "json",
    success: function (response) {
      var hasil = "";
      var array_product = response.output;
      var hasil_grandtotal = 0;
      var hasil_date = "";
     
    
    
      
      array_product.forEach(function(elem) {
        hasil_grandtotal += elem['buy_subtotal'];
        var variants = "";
        var imageproduct = "{{asset('/images/')}}/product/" + elem['product_image'];
        if(elem['variant_descriptions'] === null){
          
          variants = "No Variants";
        }
        else{
          imageproduct = "{{asset('/images/')}}/variant/" + elem['images_variant'];
          variants = "Variant " +  elem['variant_descriptions'];
        }
        hasil += "<div class = 'row mt-3' style = 'border-radius:5px;box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding:10px;'><img src = '"+imageproduct+"' style = 'width:75px;height:75px;'><div class ='col-xl-8' > <p style = 'color:grey;'><b>"+elem['buy_qty']+"</b> pcs - "+variants+" </p><b><p>"+elem['product_name']+"</p></b></div><div class = 'col-xl-2' style = 'padding-top:20px;'><b><p>Rp"+elem['buy_subtotal']+"</p></b></div></div>";
      });


      $("#modal_invoice_grand_total").text("Rp "+array_product[0]['total_invoice']);
      $("#modal_invoice_tanggal_invoice").text(array_product[0]['date_invoice']);
      $("#modal_invoice_id").text(data_trans);
      $("#data_variant").html(hasil);
   
        console.log(hasil);
    }
  });
}
     

</script>