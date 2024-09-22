<div class="row">
    
@foreach($products as $mp)
<div class="col-md-3">
  <div class="wsk-cp-product">
    <div class="wsk-cp-img">
      @if(file_exists(public_path()."/images/product/".$mp->images))
      <img src="{{asset('images/product/'.$mp->images)}}" alt="Product" class="img-responsive" />
      @else
      <img src="{{asset('images/logo-modified.png')}}" alt="Product" class="img-responsive" />
      @endif
    </div>
    <div class="wsk-cp-text">
      <div class="category" style = "">
        <span>@if($mp->category_name){{$mp->category_name}}@else All @endif</span>
      </div>
      <div class="title-product">
        <h3>{{$mp->names}}</h3>
      </div>
      <div class="description-prod">
        <p>{{$mp->descriptions}}</p>
      </div>
      <div class="card-footer">
        <div class="wcf-left"><span class="price">Rp{{number_format($mp->prices-(($mp->prices*$mp->discounts)/100)) }}</span></div>
        <div class="wcf-right">@if($mp->has_variants == 1)<a href="javascript:;" class="buy-btn" data-toggle="modal" data-target="#exampleModal"  onclick = "showdetail({{$mp->id}}, '{{$mp->names}}')">@else <a href="javascript:;" class="buy-btn"  onclick = "orderwithoutvariant({{$mp->id}})"> @endif<i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a></div>
      </div>
    </div>
  </div>
</div>
@endforeach
      

</div>
<div class = "row" style = "overflow-x: auto;">
<div class = "mylinks" style = "margin:auto;" >
    {!! $products->links() !!}
  </div>
</div>
</div>


  

