@foreach($transactions as $key => $ml)   
<div class="row border-top border-bottom" id = "kotakcart{{$key}}">
  <div class="row main align-items-center">
      <div class="col-2"><i class="fa fa-check-circle" style = "color:green;" aria-hidden="true"></i>
      </div>
      <div class="col">
          <div class="row text-muted">ID : SFS-{{$ml['id']}}</div>
          <div class="row">{{$ml['date_invoice']}}</div>
      </div>
      <div class="col">
          <b> {{$ml['total_qty']}}</b> Items
      </div>
      <div class="col">Rp {{number_format($ml['total_price'])}} </div>
      <div class="col"><button data-trans = "{{$ml['id']}}" onclick = "getInvoiceDetail(this)"  data-toggle="modal" data-target="#exampleModal" class = "lihat_detail" style = "padding:5px;border-radius:10px;font-size:16px;background-color:#3A2D28;color:white;">Lihat Invoice <i class="fa fa-info-circle" aria-hidden="true"></i>
      </button> </div>
  </div>
</div>
@endforeach

<div class = "mylinks" >
    {!! $transactions->links() !!}
  </div>
</div>
