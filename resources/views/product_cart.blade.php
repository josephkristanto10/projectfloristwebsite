<div class="row">
    
@foreach($products as $mp)
<div class = "col-md-4">
  <div class="product-card">
    <div class="badge">Hot</div>
    <div class="product-tumb">
      <img src="{{asset('images/product/'.$mp->images)}}" alt="">
    </div>
    <div class="product-details">
      <span class="product-catagory"></span>
      <h4><a  id = "namaproduk_{{$mp->id}}" style = "cursor:pointer;color:#131312;">{{$mp->names}}</a></h4>
      <p style = "font-size:12px;">{{$mp->descriptions}}</p>
      <div class="product-bottom-details">
        <div class="product-price" style = "color:#131312;font-size:22px;"><small></small>Rp{{number_format($mp->prices-(($mp->prices*$mp->discounts)/100)) }}</div>
        <div class="product-links"> 
          @if($mp->has_variants == 1)
          <a  data-toggle="modal" data-target="#exampleModal"  onclick = "showdetail({{$mp->id}})" style = "cursor:pointer;color:#3A2D28 !important;"><i class="fa fa-shopping-cart"  ></i> Add to cart</a>
          @else
          <a   onclick = "orderwithoutvariant({{$mp->id}})"  style = "color:#3A2D28 !important;cursor:pointer;"><i class="fa fa-shopping-cart"  ></i> Add to cart</a>

          @endif
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


  

