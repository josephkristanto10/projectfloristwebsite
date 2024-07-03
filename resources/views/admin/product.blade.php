<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supplier Florist Surabaya</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('admin/assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href = "{{asset('css/font-awesome-4.7.0/css/font-awesome.css')}}"/>
  <style>
    .row{
      width:100%;
      margin-top:10px;
    }
  </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('adminsite')}}" class="text-nowrap logo-img">
            <img src="{{asset('admin/assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('adminsite')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Master</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistproduk')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Produk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistvariant')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Variant Produk</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelisttrx')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Transaksi</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pagelistuser')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">User</span>
              </a>
            </li>
        
          </ul>
      
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Hello {{session()->get("nama_superadmin")}} &nbsp;
                  <img src="{{asset('admin/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
              
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
     
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
          
              <div class="card-body p-4">
                <span style = "float:right;margin-right:20px;" ><button class = "btn btn-primary" data-toggle = "modal" data-target="#modal_add_product" >Tambah Produk</button></span>
                <h1>Product</h1> 
                <table id="table-product" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Variant</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
         
        </div>
     
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>

 
  <div class="modal fade" id="modal_detail_product" tabindex="-1" role="dialog" aria-labelledby="modal_detail_productLabel" aria-hidden="true" style = "z-index:100000;" >
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="judulproduk" ><i class="fa fa-list-alt" aria-hidden="true"></i>
                Produk</h3>
           
              <button type="button" id = "closeeditproduct" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Detail Produk</h4>
              <form id = "formedit" enctype="multipart/form-data">
                {!! csrf_field() !!}
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Gambar Produk <input id = "edit_gambarproduk" name = "gbr_produk" type = "file" class = "form-control"> </div>
                <div class = "col-6">Nama Produk <input  id = "edit_namaproduk" name = "nama_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Harga Produk <input id = "edit_hargaproduk" name = "hrg_produk" type = "text" class = "form-control" required></div>
                <div class = "col-6">Discount Produk <input  id = "edit_discountproduk" name = "dsc_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-12">Description Produk <input  id = "edit_descriptionproduk" name = "desc_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class ="col-12" style = "text-align:right;"><input type = "submit" class ="btn btn-success "  value = "Ganti"></div>
              </div>
            </form>
              <h4>List Variant Produk</h4>
              <table id="table-product" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Gambar</th>
                    <th>Variant Name</th>
                    <th>Discount</th>
                    <th>Price</th>
                
                  </tr>
                </thead>
                <tbody id = "isian_variant_produk"></tbody>
              </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_add_product" tabindex="-1" role="dialog" aria-labelledby="modal_add_productLabel" aria-hidden="true" style = "z-index:100000;" >
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="judulproduks" ><i class="fa fa-list-alt" aria-hidden="true"></i>
                Produk</h3>
              <button type="button" id = "closeaddproduct" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Tambah Produk</h4>      
              <form id = "formtambah" enctype="multipart/form-data">
                {!! csrf_field() !!}
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Gambar Produk <input id = "add_gambarproduk" name = "add_gbr_produk" type = "file" class = "form-control"> </div>
                <div class = "col-6">Nama Produk <input  id = "add_namaproduk" name = "add_nama_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Harga Produk <input id = "add_hargaproduk" name = "add_hrg_produk" type = "text" class = "form-control" required></div>
                <div class = "col-6">Discount Produk <input  id = "add_discountproduk" name = "add_dsc_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-12">Description Produk <input  id = "add_descriptionproduk" name = "add_desc_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class="alert alert-success d-flex align-items-center" role="alert" id = "add_alert_notif_success" style = "display:none !important;">
                <div>
                  Produk Sukses Ditambah pada <span id = "add_tanggal_alert_success"></span>. Jika tidak tertambah, Hubungi Developer.
                </div>
              </div>
              <div class="alert alert-danger d-flex align-items-center" role="alert" id = "add_alert_notif_danger" style = "display:none !important;">
                <div>
                  Produk gagal Ditambah <span id = "add_tanggal_alert_danger"></span>.. Segera Hubungi Developer.
                </div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class ="col-12" style = "text-align:right;"><input type = "submit" class ="btn btn-success "  value = "Tambah"></div>
              </div>
            </form>
             
            
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}
      </div>
    </div>
  </div>
</div>






  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
</body>

</html>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  var globalselectedproduct = "";
   $(document).ready(function () {
   var mytable =  $('#table-product').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('/getlistproduk')}}",
      columns: [
        // {
        //    render: function (data, type, row, meta) {
        //      return meta.row + meta.settings._iDisplayStart + 1;
        //    },
        // },
        {
           data: 'id'
        },
        {
          "render": function ( data, type, row ) {
             var url_gambar = "{{asset('/images/')}}/product/" + row.images;
             return '<img src = "'+url_gambar+'" style = "width:70px;height:70px;">';
           }
        },
        {
           data: 'names'
        },
        {
          //  data: 'has_variants'
          "render": function ( data, type, row ) {
            var status_variants = "Tidak ada";
            if(row.has_variants == 1){
              status_variants = "Ada Variant";
            }
             return status_variants;
           }
        },
        {
           data: 'prices'
        },
        {
          "render": function ( data, type, row ) {
            var status_produk = "<span style = 'color:green;'>aktif</span>";
            if(row.product_status == 0){
              status_produk = "<span style = 'color:red;'>tidak aktif</span>";
            }
             return status_produk;
           }
        },
        {
           "render": function ( data, type, row ) {
            return '<button class="btn btn-warning" onclick = "getdetailTransaction(this)" data-id = "'+row.id+'" btn-sm" data-toggle="modal" data-target="#modal_detail_product" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><br><br><button class="btn btn-danger" onclick = "getStatusChange(this)" data-id = "'+row.id+'" btn-sm"  ><i class="fa fa-exchange" aria-hidden="true"></i></button>';
          }
        }
      ],
    });
  });


  function getdetailTransaction(myobj){
    var productid = $(myobj).attr("data-id");
    globalselectedproduct = productid;
    $.ajax({
      type: "get",
      url: "{{url('/getdetailproductadmin')}}",
      data: {"idproduct" : productid},
      dataType: "json",
      success: function (response) {
        $("#isian_variant_produk").html("");
        $("#isian_variant_produk").html(response.output);
        


        $("#edit_namaproduk").val(response.output_proudct[0].names);
        $("#edit_hargaproduk").val(response.output_proudct[0].prices);
        $("#edit_discountproduk").val(response.output_proudct[0].discounts);
        $("#edit_descriptionproduk").val(response.output_proudct[0].descriptions);
        
        
        
        
      }
    });

  }
  function editProduct(){
    var  formsdata = new FormData($("#formedit"));
    $.ajax({
      type: "post",
      url: "{{url('/getdetailproductadmin')}}",
      data: {"idproduct" : productid},
      dataType: "json",
      success: function (response) {
        // $("#isian_variant_produk").html("");
        // $("#isian_variant_produk").html(response.output);
        


        // $("#edit_namaproduk").val(response.output_proudct[0].names);
        // $("#edit_hargaproduk").val(response.output_proudct[0].prices);
        // $("#edit_discountproduk").val(response.output_proudct[0].discounts);
        
        
        
      }
    });
  }

  $("#formedit").on('submit',(function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('id_product', globalselectedproduct);
        $.ajax({
          url: "{{url('/editproductadmin')}}",
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
              $('#table-product').DataTable().ajax.reload();
              // $('#modal_detail_product').modal();
              $("#closeeditproduct").click();
              Swal.fire({
                title: "<strong>Produk sudah diperbarui</strong>",
                icon: "success",
                html: "Jika tidak terupdate, hubungi Developer",
                showCloseButton: false,
                showCancelButton: false,
                allowOutsideClick:false,
                focusConfirm: false,
                confirmButtonText: `
                  <i class="fa fa-thumbs-up"></i> Ok
                `,
                confirmButtonAriaLabel: "Ok",
            });

            },
        });
    }));

      $("#formtambah").on('submit',(function(e){
          e.preventDefault();
          // $("#add_alert_notif_success").css("display","none");
          // $("#add_alert_notif_danger").css("display","none");
          var formdata = new FormData(this);
          $.ajax({
            url: "{{url('/addproductadmin')}}",
              type: "POST",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
              contentType: false,
              cache: false,
              processData:false,
              success: function(data){
                $('#table-product').DataTable().ajax.reload();
                var currentdate = new Date(); 
                var tgl =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                $("#add_alert_notif_danger").attr("style", "display: none !important");
                $("#add_alert_notif_success").attr("style", "display: block !important");
                $("#add_tanggal_alert_success").html(tgl);
                $("#formtambah").trigger("reset");


              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                var currentdate = new Date(); 
                var tgl =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                $("#add_alert_notif_success").attr("style", "display: none !important");
                $("#add_alert_notif_danger").attr("style", "display: block !important");
                $("#add_tanggal_alert_danger").html(tgl);
              },
          });
      }));

      function getStatusChange(myobj){
        var idproduct = $(myobj).attr("data-id");
   
        $.ajax({
          type: "post",
          url: "{{url('/changestatusproduct')}}",
          data: { "_token": "{{ csrf_token() }}","idproduct" : idproduct},
          dataType: "json",
          success: function (response) {
            Swal.fire({
                  title: "<strong>Produk ini dinonaktifkan</strong>",
                  icon: "success",
                  html: "Jika tidak terganti, hubungi Developer",
                  showCloseButton: false,
                  showCancelButton: false,
                  allowOutsideClick:false,
                  focusConfirm: false,
                  confirmButtonText: `
                    <i class="fa fa-thumbs-up"></i> Ok
                  `,
                  confirmButtonAriaLabel: "Ok",
              });
              $('#table-product').DataTable().ajax.reload();
            
          }
        });
      }
</script>
