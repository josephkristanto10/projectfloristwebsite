<div class="row">
    
@foreach($products as $mp)
<div class = "col-md-4">
  <div class="product-card" style = "min-height:640px;">
    <div class="badge">Hot</div>
    <div class="product-tumb">
      <img src="{{asset('images/product/'.$mp->images)}}" alt="Waiting" style = "max-height:360px;">
    </div>
    <div class="product-details">
      <span class="product-catagory"></span>
      <h4><a  id = "namaproduk_{{$mp->id}}" style = "cursor:pointer;color:#131312;  padding: 10px;">{{$mp->names}}</a></h4>
      <p style = "font-size:12px;  padding: 10px;">{{$mp->descriptions}}</p>
      <div class="product-bottom-details" style = "position:absolute;bottom:0px;width:100%;padding-left:15px !important;">
        <div class = "row">
          <div class = "col-6">        <div class="product-price" style = "color:#131312;font-size:22px;"><small></small>Rp{{number_format($mp->prices-(($mp->prices*$mp->discounts)/100)) }}</div>
        </div>
          <div class = "col-6"> <div class="product-links"> 
            @if($mp->has_variants == 1)
            <a  data-toggle="modal" data-target="#exampleModal"  onclick = "showdetail({{$mp->id}})" style = "cursor:pointer;color:#3A2D28 !important;"><i class="fa fa-shopping-cart"  ></i> Add to cart</a>
            @else
            <a   onclick = "orderwithoutvariant({{$mp->id}})"  style = "color:#3A2D28 !important;cursor:pointer;"><i class="fa fa-shopping-cart"  ></i> Add to cart</a>
  
            @endif
          </div></div>
        </div>
       
      </div>
    </div>
  </div>
</div>
@endforeach
      

</div>
<div class = "mylinks" >
    {!! $products->links() !!}
  </div>
</div>


  

