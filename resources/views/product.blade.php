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
  <link rel="shortcut icon" href="{{ asset('images/logo-modified.png')}}">
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
/* Ini Style Product */
#kotakproduk #container{
  box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
  background: rgba(255, 255, 255, 0.90);
  text-align: center;
  border-radius: 5px;
  overflow: hidden;
  margin: 5em auto;
  height: 350px;
  /* width: 100%; */
  
}



/*  Product details  */
#kotakproduk .product-details {
  position: relative;
  text-align: center;
  overflow: hidden;
  padding: 30px;
  height: 100%;
  float: left;
  width: 50%;


}

/*  Product Name */
#kotakproduk #container .product-details h1{
  font-family: 'Old Standard TT', serif;
  display: inline-block;
  position: relative;
  font-size: 34px;
  color: #344055;
  margin: 0;
  
}

#kotakproduk #container .product-details h1:before{
  position: absolute;
  content: '';
  right: 0%; 
  top: 0%;
  transform: translate(25px, -15px);
  font-family: 'Farsan', cursive;
  display: inline-block;
  background: #FFA69E;
  border-radius: 5px;
  font-size: 14px;
  padding: 5px;
  color: #FFF;
  margin: 0;
  animation: chan-sh 6s ease infinite;

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
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/product')}}"> Product <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/howtoorder')}}"> How to Order </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact us</a>
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
  
    <div class="container" id = "kotakproduk">
      <h1 style = "text-align:center;  font-family: 'Old Standard TT', serif; " id = "judul_best_seller">Best Seller Product  <img src = "{{ asset('/images/bunga.png')}}" style = "margin-top:-15px;width:75px;height:75px;"></h1>
      <h5 style = "text-align:center;  font-family: 'Old Standard TT', serif; color: #714423;">Produk unggulan di store <b>Supplier Florist Surabaya</b> </h5>
      <div class="row">
        <div class="col-md-6 col-xl-6">
          <div id="container">  
  
            <!-- Start  Product details -->
              <div class="product-details">
                
                <!--  Product Name -->
              <h1>Bouquet Bunga</h1>
            <!--    <span class="hint new">New</span> -->
            <!--    <span class="hint free-shipping">Free Shipping</span> -->
            <!--    the Product rating -->
              <span class="hint-star star">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </span>
                
              
            <!-- The most important information about the product -->
                {{-- <p class="information" >" Bunga ini sangat cocok untuk diberikan ketika ada event valentine"</p> --}}
            
                
                
            <!--    Control -->
            <br><br>
            <div class="control">
              <button class="btn" style = "font-size:12px;">
              {{-- <span class="price">49k</span> --}}
              
              <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
              <span class="buy" style = "background-color:#d4ab4c;"> Description <i class="fa fa-newspaper-o" aria-hiddexn="true"></i>
              </span>
            </button>
              
            </div>
            <br>
            <div class="control">
              <button class="btn" style = "font-size:12px;">
              <span class="price">49k</span>
              <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
              <span class="buy">Buy Now <i class="fa fa-cart-plus" aria-hidden="true"></i></span>
         
            </button>
              
            </div>
           
                  
            </div>
              
            <!--  End Product details   -->
              
              
              
            <!--  Start product image & Information -->
              
            <div class="product-image">
              
              <img src="https://sc01.alicdn.com/kf/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3/200006212/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3.jpg" alt="Omar Dsoky">
              
            <!--  product Information-->
            <div class="info">
              <h2>Detail Produk</h2>
              <ul>
                <li><strong>Bonquet Bunga: </strong>Full Rakit</li>
                <li><strong>Lebar: </strong>40 cm</li>
                <li><strong>Tinggi: </strong>20cm</li>
                <li><strong>Harga: </strong>49k</li>
                <li><strong>Estimasi Pengerjaan : </strong>2 - 3</li>
              
              </ul>
            </div>
            </div>
            <!--  End product image  -->
            
            
            </div>
          
      
        
        </div>
            
            <div class="col-md-6 col-xl-6">
              <div id="container">  
      
                <!-- Start  Product details -->
                  <div class="product-details">
                    
                    <!--  Product Name -->
                  <h1>Bouquet Bunga</h1>
                <!--    <span class="hint new">New</span> -->
                <!--    <span class="hint free-shipping">Free Shipping</span> -->
                <!--    the Product rating -->
                  <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                  </span>
                    
                  
                <!-- The most important information about the product -->
                    {{-- <p class="information" >" Bunga ini sangat cocok untuk diberikan ketika ada event valentine"</p> --}}
                
                    
                    
                <!--    Control -->
                <br><br>
                <div class="control">
                  <button class="btn" style = "font-size:12px;">
                  {{-- <span class="price">49k</span> --}}
                  
                  <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                  <span class="buy" style = "background-color:#d4ab4c;"> Description <i class="fa fa-newspaper-o" aria-hiddexn="true"></i>
                  </span>
                </button>
                  
                </div>
                <br>
                <div class="control">
                  <button class="btn" style = "font-size:12px;">
                  <span class="price">49k</span>
                  <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                  <span class="buy">Buy Now <i class="fa fa-cart-plus" aria-hidden="true"></i></span>
             
                </button>
                  
                </div>
               
                      
                </div>
                  
                <!--  End Product details   -->
                  
                  
                  
                <!--  Start product image & Information -->
                  
                <div class="product-image">
                  
                  <img src="https://sc01.alicdn.com/kf/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3/200006212/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3.jpg" alt="Omar Dsoky">
                  
                <!--  product Information-->
                <div class="info">
                  <h2>Detail Produk</h2>
                  <ul>
                    <li><strong>Bonquet Bunga: </strong>Full Rakit</li>
                    <li><strong>Lebar: </strong>40 cm</li>
                    <li><strong>Tinggi: </strong>20cm</li>
                    <li><strong>Harga: </strong>49k</li>
                    <li><strong>Estimasi Pengerjaan : </strong>2 - 3</li>
                  
                  </ul>
                </div>
                </div>
                <!--  End product image  -->
                
                
                </div>
              
          
            
            </div>

            <div class="col-md-6 col-xl-6">
              <div id="container">  
      
                <!-- Start  Product details -->
                  <div class="product-details">
                    
                    <!--  Product Name -->
                    <h1>Bouquet Bunga</h1>
                  <!--    <span class="hint new">New</span> -->
                  <!--    <span class="hint free-shipping">Free Shipping</span> -->
                  <!--    the Product rating -->
                  
                    <span class="hint-star star" style = "margin-top:10px;margin-bottom:10px;">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                  
                  
                <!-- The most important information about the product -->
                    <p class="information">" Bunga ini sangat cocok untuk diberikan ketika ada event valentine"</p>
                
                    
                    
                <!--    Control -->
                <div class="control">
                  
                <!-- Start Button buying -->
                  <button class="btn" style = "font-size:12px;">
                <!--    the Price -->
                  <span class="price">49k</span>
                <!--    shopping cart icon-->
                  <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <!--    Buy Now / ADD to Cart-->
                  <span class="buy">Buy Now</span>
                </button>
                  <!-- End Button buying -->
                  
                </div>
                      
                </div>
                  
                <!--  End Product details   -->
                  
                  
                  
                <!--  Start product image & Information -->
                  
                <div class="product-image">
                  
                  <img src="https://sc01.alicdn.com/kf/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3/200006212/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3.jpg" alt="Omar Dsoky">
                  
                <!--  product Information-->
                <div class="info">
                  <h2>Detail Produk</h2>
                  <ul>
                    <li><strong>Bonquet Bunga: </strong>Full Rakit</li>
                    <li><strong>Lebar: </strong>40 cm</li>
                    <li><strong>Tinggi: </strong>20cm</li>
                    <li><strong>Harga: </strong>49k</li>
                    <li><strong>Estimasi Pengerjaan : </strong>2 - 3</li>
                  
                  </ul>
                </div>
                </div>
                <!--  End product image  -->
                
                
                </div>
              
          
            
            </div>
            <div class="col-md-6 col-xl-6">
              <div id="container">  
      
                <!-- Start  Product details -->
                  <div class="product-details">
                    
                    <!--  Product Name -->
                    <h1>Bouquet Bunga</h1>
                  <!--    <span class="hint new">New</span> -->
                  <!--    <span class="hint free-shipping">Free Shipping</span> -->
                  <!--    the Product rating -->
                  
                    <span class="hint-star star" style = "margin-top:10px;margin-bottom:10px;">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                  
                  
                <!-- The most important information about the product -->
                    <p class="information">" Bunga ini sangat cocok untuk diberikan ketika ada event valentine"</p>
                
                    
                    
                <!--    Control -->
                <div class="control">
                  
                <!-- Start Button buying -->
                  <button class="btn" style = "font-size:12px;">
                <!--    the Price -->
                  <span class="price">49k</span>
                <!--    shopping cart icon-->
                  <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <!--    Buy Now / ADD to Cart-->
                  <span class="buy">Buy Now</span>
                </button>
                  <!-- End Button buying -->
                  
                </div>
                      
                </div>
                  
                <!--  End Product details   -->
                  
                  
                  
                <!--  Start product image & Information -->
                  
                <div class="product-image">
                  
                  <img src="https://sc01.alicdn.com/kf/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3/200006212/HTB1Cic9HFXXXXbZXpXXq6xXFXXX3.jpg" alt="Omar Dsoky">
                  
                <!--  product Information-->
                <div class="info">
                  <h2>Detail Produk</h2>
                  <ul>
                    <li><strong>Bonquet Bunga: </strong>Full Rakit</li>
                    <li><strong>Lebar: </strong>40 cm</li>
                    <li><strong>Tinggi: </strong>20cm</li>
                    <li><strong>Harga: </strong>49k</li>
                    <li><strong>Estimasi Pengerjaan : </strong>2 - 3</li>
                  
                  </ul>
                </div>
                </div>
                <!--  End product image  -->
                
                
                </div>
              
          
            
            </div>
            </div>
          
            <div style = "margin:auto;width:100%;text-align:center;"><button class = "btn btn-primary" style = "background-color:#714423 !important;padding:10px;margin:auto; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">Lihat Semua Produk <i class="fa fa-chevron-right" aria-hidden="true"></i></button></div>
      </div>
      
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

  {{-- <section class="contact_section layout_padding">
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