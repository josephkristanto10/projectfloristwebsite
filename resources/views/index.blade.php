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

html {
  scroll-behavior: smooth;
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
  background: linear-gradient(to left, #3A2D28 50%, #E8B865 50%) right;
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
/* Ini Style Product */
#kotakproduk #container{
  box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
  background: rgba(255, 255, 255, 0.90);
  text-align: center;
  border-radius: 5px;
  overflow: hidden;
  margin: 5em auto;
  height: 350px;
  width: 100%;
  
}






/* @keyframes chan-sh {
  from  {content: 'free shipping';}
  to  {content: 'New';}
  
} */

/*Product Rating  */
#kotakproduk .hint-star {
  display: inline-block;
  margin-left: 0.5em;
  color: gold;
  width: 50%;
}


/* The most important information about the product */
#kotakproduk #container .product-details > p {
  font-family: 'Farsan', cursive;
  text-align: center;
  font-size: 15px;
  color: #7d7d7d;
  
}

/* control */

#kotakproduk .control{
  position: relative;
  text-align: center;
  width: 100%;
  margin:auto;
  /* bottom: 20%; */
  /* left: 22.8%; */
  
}
/* the Button */
#kotakproduk .btn {
  transform: translateY(0px);
  transition: 0.3s linear;
  background: #714423;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  outline: none;
  border: none;
  color: #eee;
  padding: 0;
  margin: 0;
  
}

#kotakproduk .btn:hover{transform: translateY(-4px);}

#kotakproduk .btn span {
  font-family: 'Farsan', cursive;
  transition: transform 0.3s;
  display: inline-block;
  padding: 5px 10px;
  font-size: 1.2em;
  margin:0;
  
}
/* shopping cart icon */
#kotakproduk .btn .price, .shopping-cart{
  background: #333;
  border: 0;
  margin: 0;
}

#kotakproduk .btn .price {
  /* transform: translateX(-10%); padding-right: 15px; */
}

/* the Icon */
#kotakproduk .btn .shopping-cart {
  transform: translateX(-100%);
  position: absolute;
  background: #333;
  z-index: 1;
  left: 0;
  top: 0;
}

/* buy */
#kotakproduk .btn .buy {z-index: 3; font-weight: bolder;}

/* #kotakproduk .btn:hover .price {transform: translateX(-110%);} */

/* #kotakproduk .btn:hover .shopping-cart {transform: translateX(0%);} */



/* product image  */
#kotakproduk .product-image {
  transition: all 0.3s ease-out;
  display: inline-block;
  position: relative;
  overflow: hidden;
  height: 100%;
  float: right;
  width: 50%;
  display: inline-block;
}

#container img {width: 100%;height: 350px;}

#kotakproduk .info {
    background: rgba(27, 26, 26, 0.9);
    font-family: 'Farsan', cursive;
    transition: all 0.3s ease-out;
    transform: translateX(-100%);
    position: absolute;
    line-height: 1.9;
    text-align: left;
    font-size: 80%;
    cursor: no-drop;
    color: #FFF;
    height: 350px;
    width: 100%;
    left: 0;
    top: 0;
    padding-top:20px;
}

#kotakproduk .info h2 {text-align: center}
#kotakproduk .product-image:hover .info{transform: translateX(0);}

#kotakproduk .info ul li{transition: 0.3s ease;}
#kotakproduk .info ul li:hover{transform: translateX(50px) scale(1.3);}

#kotakproduk .product-image:hover img {transition: all 0.3s ease-out;}
#kotakproduk .product-image:hover img {transform: scale(1.2, 1.2);}

/* End Style Product */


.product-card {
    width: 100%;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;
    margin: 50px auto;
    background: #fafafa;
}

.badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
}

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    /* padding: 50px; */
    background: #f0f0f0;
}

.product-tumb img {
    max-width: 100%;
    max-height: 100%;
}

.product-details {
    padding: 30px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ccc;
    margin-bottom: 18px;
}

.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
    font-size:20px;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #999;
    display: -webkit-box;
  max-width: 400px;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
    
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.product-bottom-details div {
    float: left;
    width: 50%;
}

.product-price {
    font-size: 18px;
    color: #fbb72c;
    font-weight: 600;
}

.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}

.product-links {
    text-align: right;
}

.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}

.product-links a:hover {
    color: #fbb72c;
}



#kotaklogin a{
  cursor: pointer;
}

.mylinks {
  display: inline-block;
}

.mylinks a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.mylinks a.active {
  background-color: #4CAF50;
  color: white;
}

.mylinks a:hover:not(.active) {background-color: #ddd;}
  </style>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />
</head>

<body>

  <div class="hero_area" style = "">
    <!-- header section strats -->
    <header class="header_section" style = "padding-top:5px;background-color:#f1f1f1;  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;height:70px;">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <span style = "color:#714423">
              SFS
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center"><b>
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}#kotakproduk"> Product</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/howtoorder')}}"> How to Order </a>
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
    <section class=" slider_section position-relative">
 
      <div class="container">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="col-lg-6 col-md-8">
                  <div class="detail_box">
                    
                    <h1  id = "judul">
                      Supplier Florist Surabaya
                    </h1>
                    <p>
                      Pusat <u style = "text-decoration: underline  #dc3545 2.5px; text-underline-offset: 5px;font-weight:700;">Perlengkapan Florist</u> Di Surabaya, Kualitas Super dan Terbaik, Harga Bersaing. 
                      
                    </p>
                    <div>
                      <a href="#kotakproduk" id = "pilihbunga" >Pilih Produk</a>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section " >
    <div class="section_number">
      01
    </div>
    <div class="container" id = "kotakproduk">
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #3A2D28 !important;" id = "judul_best_seller"> Produk Kami  <img src = "{{ asset('/images/bunga.png')}}" style = "margin-top:-15px;width:75px;height:75px;"></h1>
      <h5 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #3A2D28 !important;">Semua produk di store <b>Supplier Florist Surabaya</b>  </h5>
      <span id ="semuaproduk">
        @include('product_cart')
     
      
      </span>
    
  </section>
  <!-- end about section -->

  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="section_number">
      02
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>
            Kenapa Pilih Supplier Florist Surabaya?
          </h2>
          <p>
            Supplier Florist Surabaya Berdiri sejak tahun 2011, Toko Kami berlokasi di Surabaya Pusat area Kayoon. Kami siap untuk melayani anda dalam membuat bunga rakit. 
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- end arrange section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="section_number">
      05
    </div>
    <div class="container ">
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #131312 !important; " id = "judul_best_seller">  Platform Kami</h1>
      <h5 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #131312;">Kita juga hadir di beberapa platform <b>E-commerce</b>  </h5>
    </div>
    <div class="container">
      <div class="row"  >
        <div class="col-md-6 mx-auto" style = "width:100%;text-align:center;margin-top:30px;">
          <img src = "{{asset('images/shopee_transparent.png')}}" style = "width:75px;height:75px;margin-left:15px;">
          <img src = "{{asset('images/instagram_transparent.png')}}" style = "width:75px;height:75px;margin-left:15px;">
          <img src = "{{asset('images/tiktok_transparent.png')}}" style = "width:75px;height:75px;margin-left:15px;">
          
        
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- map section -->

  <div class="map_section">
    <div class="map_container">
      <div class="map">
        <div id="googleMap"></div>
      </div>
    </div>
  </div>

  <!-- end map section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <h5 >
              SFS
            </h5>
            <p>
              Florist Bunga terbaik di Surabaya, Percayakan urusan bunga kepada kami.
            </p>
          </div>
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
          {{-- <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="images/insta-1.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="images/insta-2.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="images/insta-3.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="images/insta-4.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="images/insta-5.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="images/insta-6.png" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Contact
            </h5>
            <div>
              <img src="images/location-white.png" alt="">
              <p>
               Surabaya
              </p>
            </div>
            <div>
              <img src="images/telephone-white.png" alt="">
              <p>
                083858428412
              </p>
            </div>
            <div>
              <img src="images/envelope-white.png" alt="">
              <p>
                sfs@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2024 Supplier Florist Surabaya
    </p>
  </footer>
  <!-- footer section -->

  {{-- Modal Varian --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style = "z-index:100000;" >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judulproduk" >Judul Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id = "data_variant" >
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick = "inputtocart()" >Save changes</button>
        </div>
      </div>
    </div>
  </div>

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
     url:"/pagination/fetch_data_index?page="+page,
     success:function(data)
     {
      $('#semuaproduk').html(data);
     }
    });
   }

var arrayofproduct = [];
var arrayofvariant = [];
var globalproduct = "0";
function orderwithoutvariant(idproduct){
 
      Swal.fire({
      title: "<strong>Konfirmasi</strong>",
      icon: "info",
      html: `
        Apakah anda yakin untuk menambahkan barang ini ke keranjang?
      `,
      showCloseButton: true,
      showCancelButton: true,
      allowOutsideClick:false,
      focusConfirm: false,
      confirmButtonText: `
        <i class="fa fa-thumbs-up"></i> Tambah
      `,
      confirmButtonAriaLabel: "Tambah",
    }).then((result) => {
                       arrayofproduct.push(idproduct+"_1");
                       $.ajax({
                        type: "post",
                        url: "{{ url('/addtocart') }}",
                        data: {
                          "_token": "{{ csrf_token() }}",
                          "array_of_products" : arrayofproduct
                        },
                        dataType: "json",
                        success: function (response) {
                   
                          arrayofproduct = [];
                          if (result.isConfirmed) {
                              Swal.fire({
                              title: 'Success!',
                              text: 'Produk telah ditambahkan di keranjang',
                              icon: 'success',
                              confirmButtonText: 'OK'
                            })
                          } 
                         

                        }
                      });
      });
}
function triggerupdateqty(mynumber){
  var nilaiqty =  $("#variant_number_"+mynumber).val();
}

function inputtocart(){
  arrayofproduct = [];
  $( ".modal input[type=number]" ).each(function( index ) {
    if($(this).val() >0){
      var id_input_number = $(this).attr("id").split("_");
      var id_variants = id_input_number[2];
      arrayofvariant.push(id_variants+"_"+$(this).val());
    }
  });
  inserttocart();
}
function inserttocart(){
  $.ajax({
    type: "post",
    url: "{{ url('/addtocart') }}",
    data: {
      "_token": "{{ csrf_token() }}",
      "array_of_products" : arrayofproduct,
      "array_of_variants" : arrayofvariant
    },
    dataType: "json",
    success: function (response) {
      // console.log(response);
      $(".modal input[type=number]").val(0);
      arrayofproduct = [];
      arrayofvariant = [];
      Swal.fire({
        title: 'Success!',
        text: 'Produk telah ditambahkan di keranjang',
        icon: 'success',
        confirmButtonText: 'OK'
      })
      globalproduct = "0";
      $('.modal').modal('toggle');
    }
  });
}
function showdetail(id_product){
  var value = $("#namaproduk_"+id_product).text();
  $("#judulproduk").text("Variant " + value);
  globalproduct = id_product;
  getDetailVariant(id_product);
}
function getDetailVariant(id_product_for_variant){
  $.ajax({
    type: "get",
    url: "{{ url('/variants_detail') }}",
    data: {
      "id_products" : id_product_for_variant
    },
    dataType: "json",
    success: function (response) {
      $("#data_variant").html("");
      var stringelement = "";
      if(response.variant.length >0){
       stringelement += '<div class = "row">';
        for(var i = 0 ; i < response.variant.length; i++){
          var iamgefromproduct = String("{{url('images/')}}" + "/product/"+response.variant[i].images);
      
          var images_product = iamgefromproduct;
          stringelement += '<div class="col-lg-4 " style = " margin:5px;"><div class="media" style = "display:block;width:100%; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" >  <div class="media-body "><img style = "width:100%;" src='+images_product+' alt="Generic placeholder image" " class="" ><h5 class="mt-0 font-weight-bold mb-2 " style = "padding-left:15px;padding-top:10px;">'+response.variant[i].name+'</h5><p class="font-italic text-muted mb-0 small" style = "padding-left:15px;padding-top:10px;">'+response.variant[i].descriptions+'.</p><div class="d-flex align-items-center justify-content-between mt-1"><h6 class="font-weight-bold my-2" style = "padding-left:15px;">Rp'+(response.variant[i].prices-((response.variant[i].prices*response.variant[i].discounts)/100))+' / pcs <input class = "form-control" id = "variant_number_'+response.variant[i].id+'" type = "number" onkeyup = "triggerupdateqty('+response.variant[i].id+')" onchange = "triggerupdateqty('+response.variant[i].id+')"  style = "width:100px;margin-top:10px;" value = "0" min = "0"> </h6></div></div></div></li> </div>';
        }
         stringelement += '</div>';
        $("#data_variant").append(stringelement);
       }
      else{
       $("#data_variant").html("<h2>Tidak ada variant</h2>");
      }
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
</script>
