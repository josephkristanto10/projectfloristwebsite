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


  </style>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" />
</head>

<body>

 
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
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/')}}">Home </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{url('/product')}}"> Product </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/howtoorder')}}"> How to Order  </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/contact')}}">Contact us <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </b>
          </div>
          <div class="quote_btn-container ">
            <a href="">
              Log in
            </a>
            <a href="">
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
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; " id = "judul_best_seller">Hubungi Kami  </h1>
      <h5 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #714423;">Hubungi Tim Admin Supplier Florist Surabaya </h5>
      <br>

    <div>
      <div class="container" id = "kotakproduk">
        <div class="row " >
          <div class="main" style = "text-align:center;">
            <ul class="cards justify-content-center" style = "margin:auto;text-align:center;">
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{ asset('images/ho_1.jpg')}}" alt="mixed vegetable salad in a mason jar." />
                    <span class="note">Fast Respond</span>
                  </div>
                  <div class="card_content">
                    <h2 class="card_title">Admin CS 1</h2>
                    <div class="card_text">
                      <p>Hubungi Tami sebagai Admin CS 1 untuk keluhan dan checkout orderan kamu.
                      </p>
                      {{-- <hr /> --}}
                      <div style = "width:100%;text-align:center;">
                        <button class  = "btn btn-primary" style = "background-color:#714423;">Klik disini</button>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </li>
          
          
              <li class="cards_item">
                <div class="card">
                  <div class="card_image">
                    <img src="{{ asset('images/ho_1.jpg')}}" alt="mixed vegetable salad in a mason jar." />
                    <span class="note">Fast Respond</span>
                  </div>
                  <div class="card_content">
                    <h2 class="card_title">Admin CS 2</h2>
                    <div class="card_text">
                      <p>Hubungi Michael sebagai Admin CS 1 untuk keluhan dan checkout orderan kamu.
                      </p>
                      {{-- <hr /> --}}
                      <div style = "width:100%;text-align:center;">
                        <button class  = "btn btn-primary" style = "background-color:#714423;">Klik disini</button>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </div>   
      {{-- <div class="row" style = "text-align:left;width:100%;">
        <div style = "margin:auto;text-align:left">
          <img src = "{{asset('images/logo_wa.png')}}" style = "width:50px;height:50px;"><label style = "margin-top:10px;"><b>Tim Admin 1</b> - Tami</label>

        </div>
      </div>
      <br>
      <div class = "row" style = "text-align:left;width:100%;">
        <div style = "margin:auto;text-align:left;">
        <img src = "{{asset('images/logo_wa.png')}}" style = "width:50px;height:50px;"><label style = "margin-top:10px;"><b>Tim Admin 2 </b> - Michael</label>
        </div>
      </div> --}}
      
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

  <!-- end why section -->

  <!-- gallery section -->
  {{-- <section class="gallery_section layout_padding">
    <div class="section_number">
      03
    </div>
    <div class="heading_container justify-content-center">
      <h2>
        Our Gallery
      </h2>
    </div>
    <div class="container">
      <div class="img_container">
        <div class="box-1">
          <div class="box-1-container">
            <div class="b-1">
              <div class="img-box">
                <img src="images/g-1.jpg" alt="">
              </div>
              <div class="img-box">
                <img src="images/g-4.jpg" alt="">
              </div>
            </div>
            <div class="b-2">
              <div class="img-box">
                <img src="images/g-2.jpg" alt="">
              </div>
              <div class="img-box">
                <img src="images/g-5.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="b-3">
            <div class="img-box">
              <img src="images/g-7.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="box-2">
          <div class="img-box">
            <img src="images/g-3.jpg" alt="">
          </div>
          <div class="img-box">
            <img src="images/g-6.jpg" alt="">
          </div>
          <div class="img-box flex-grow-1">
            <img src="images/g-8.jpg" alt="">
          </div>
        </div>
      </div>
  </section> --}}
  <!-- end gallery section -->

  <!-- client section -->

  {{-- <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container justify-content-center">
        <h2>
          What Our Customers Say
        </h2>
        <div class="section_number">
          04
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="client_box">
            <div class="detail_box">
              <div class="img_box">
                <img src="images/client-1.png">
              </div>
              <h5>
                nomil du
              </h5>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                classical Latin literature from 45 BC, making it over </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="client_box">
            <div class="detail_box">
              <div class="img_box">
                <img src="images/client-2.png">
              </div>
              <h5>
                zabih jo
              </h5>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                classical Latin literature from 45 BC, making it over </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}



  <!-- end client section -->

  <!-- arrange section -->

  {{-- <section class="arrange_section">
    <div class="container">
      <div class="detail_box">
        <h2>
          Our Wonderful Arrangements
        </h2>
        <p>
          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
          literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
          College in Virginia, looked up one of the more obscure Latin words
        </p>
      </div>
    </div>
  </section> --}}



  <!-- end arrange section -->

  <!-- contact section -->
{{-- 
  <section class="contact_section layout_padding">
    <div class="section_number">
      05
    </div>
    <div class="container ">
      <div class="heading_container justify-content-center">
        <h2 class="">
          Contact Us
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- end contact section -->

  <!-- map section -->

  {{-- <div class="map_section">
    <div class="map_container">
      <div class="map">
        <div id="googleMap"></div>
      </div>
    </div>
  </div> --}}

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
          {{-- <div class="info_links pl-lg-5">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li class="active">
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.html">
                  Product
                </a>
              </li>
              <li>
                <a href="gallery.html">
                  Gallery
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
          </div> --}}
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
<script>


     

</script>