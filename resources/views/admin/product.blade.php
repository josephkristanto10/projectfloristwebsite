<!doctype html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supplier Florist Surabaya</title>
  <link rel="shortcut icon" href="{{ asset('images/logo-modified.png')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href = "{{asset('css/font-awesome-4.7.0/css/font-awesome.css')}}"/>
  
  <style>
    .row{
      width:100%;
      margin-top:10px;
    }
    .sidebar-nav ul .sidebar-item.selected > .sidebar-link, .sidebar-nav ul .sidebar-item.selected > .sidebar-link.active, .sidebar-nav ul .sidebar-item > .sidebar-link.active {
      background-color: #F2D2BD;
      color: #131312;
    }
    .image_upload_container>input {
  display: none;
}
.edit_image_upload_container>input {
  display: none;
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
          <a href="{{url('adminsite')}}" class="text-nowrap logo-img" style = "text-align:center;margin:auto;">
            <br>
            <img src="{{asset('images/logo-modified.png')}}" style = "width:100px;height:100px;" alt="" />
            <br><br>
            <h3> Admin Site</h3>
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
              <a class="sidebar-link" href="{{url('pagelistcategory')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
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
          {{-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="{{asset('admin/assets/images/backgrounds/rocket.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div> --}}
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
                <span style = "float:right;margin-right:20px;" ><button class = "btn btn-primary" data-toggle = "modal" data-target="#modal_add_product" style = " background-color: #F2D2BD;color:#131312;border:0px;"><i class="fa fa-plus-square-o" aria-hidden="true"></i>  Tambah Produk</button></span>
                <h1>Product</h1>
                <table id="table-product" class="table table-bordered table-hover " style = "width:100%;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Gambar</th>
                      <th>Kategori</th>
                      <th>Nama</th>
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
                  <div class = "col-12">Kategori Produk 
                    <select id = "edit_kategory_product" name = "edit_kategori_produk" class = "form-control">
                      @foreach($cat as $c)
                      <option value = '{{$c->id}}'>{{$c->category_name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Gambar Produk <input id = "edit_gambarproduk" name = "gbr_produk" type = "file" class = "form-control"> </div>
                <div class = "col-6">Nama Produk <input  id = "edit_namaproduk" name = "nama_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Harga Produk <input id = "edit_hargaproduk" name = "hrg_produk" type = "text" class = "form-control" ></div>
                <div class = "col-3">Stock Produk <input  id = "edit_stocksproduk" name = "stocks_produk" type = "text" class = "form-control" ></div>

                <div class = "col-3">Discount Produk <input  id = "edit_discountproduk" name = "dsc_produk" type = "text" class = "form-control" ></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-12">Description Produk <input  id = "edit_descriptionproduk" name = "desc_produk" type = "text" class = "form-control" ></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class ="col-12" style = "text-align:right;"><input type = "submit" class ="btn btn-success "  value = "Ganti"></div>
              </div>
            </form>
              <h4>Update Stock all Variant </h4>
              <form id = "form_update_all_stock">
            
                <div class = "row mt-3 mb-3">
                  <div class = "col-10">Update Stock ( Semua Variant ) <input id = "edit_all_stock" name = "edit_all_stock_variant" placeholder="masukan jumlah stock yang diinginkan" type = "text" class = "form-control" required></div>
                  <div class ="col-2" style = ""><input type = "submit" class ="btn btn-success mt-4 w-100"  value = "Update Stock"></div>

                </div>
                <p  id = "peringatan_update_all"> <span id = "hasil_peringatan_update_all"></span></p>
              </form>

              <h4>List Variant Produk</h4>
              <table id="table-product" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Gambar</th>
                    <th>Variant Name</th>
                    <th>Stok</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th>Action</th>
                
                  </tr>
                </thead>
                <tbody id = "isian_variant_produk"></tbody>
              </table>
              <h4>Tambah Variant Produk</h4>
              <form id = "add_edit_tambah_variant">
                  <div class = "row mt-3 mb-3">
                    <div class = "col-1 edit_image_upload_container">Gambar  <br><label for="edit_add_gambarvariant0">
                      <img id = "edit_gambar0" style = "width:50px;height:50px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/>
                    </label>  <input id = "edit_add_gambarvariant0" name = "edit_add_gbr_produks[]" onchange="editadduploadgbrvariant(this)" type = "file" class = "form-control" required> 
                    </div>
                    <div class = "col-3">Nama  <input  id = "edit_add_namavariant0" name = "edit_add_nama_produks[]" type = "text" class = "form-control" required></div>
                    <div class = "col-2">Harga  <input id = "edit_add_hargavariant0" name = "edit_add_hrg_produks[]" type = "text" class = "form-control" required></div>
                    <div class = "col-2">Stok  <input id = "edit_add_stokvariant0" name = "edit_add_stock_produks[]" value = "0" type = "text" class = "form-control" required></div>
                    <div class = "col-2">Discount  <input  id = "edit_add_discountvariant0" name = "edit_add_dsc_produks[]" type = "text" class = "form-control" ></div>
                  </div>
                    <div id = "edit_tambahan_variant">
                      <div id = "edit_append_tambahan_variant"></div>
                  </div>
                  <div class="alert alert-success d-flex align-items-center" role="alert" id = "edit_add_alert_notif_success" style = "display:none !important;">
                    <div>
                      Produk Sukses Ditambah pada <span id = "edit_add_tanggal_alert_success"></span>. Jika tidak tertambah, Hubungi Developer.
                    </div>
                  </div>
                  <div class="alert alert-danger d-flex align-items-center" role="alert" id = "edit_add_alert_notif_danger" style = "display:none !important;">
                    <div>
                      Produk gagal Ditambah <span id = "edit_add_tanggal_alert_danger"></span>.. Segera Hubungi Developer.
                    </div>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                  </div>
                  <br>
                  <span style = "float:right;margin-right:30px;"><button type = "button" class = "btn btn-primary" onclick = "edittambahvariantlain()"  >Tambah variant lain&nbsp;<i class = "fa fa-plus"></i></button></span>
                  <div class ="col-12" style = "text-align:right;"> <input style = "float:right;" type = "submit" class ="btn btn-success " id = "edit_tambah_variant_button"  value = "Upload Variant"> </div>
              </form>
            <div class="modal-footer">


              {{-- <button type="button" class="btn btn-primary" >Close</button> --}}
              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
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
                <div class = "col-12">Kategori Produk 
                  <select id = "add_kategory_product" name = "add_kategori_produk" class = "form-control">
                    @foreach($cat as $c)
                    <option value = '{{$c->id}}'>{{$c->category_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Gambar Produk <input id = "add_gambarproduk" name = "add_gbr_produk" type = "file" class = "form-control"> </div>
                <div class = "col-6">Nama Produk <input  id = "add_namaproduk" name = "add_nama_produk" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-6">Harga Produk <input id = "add_hargaproduk" name = "add_hrg_produk" type = "text" class = "form-control" ></div>
                <div class = "col-3">Stock Produk <input  id = "add_stocksproduk" name = "add_stocks_produk" value = "0" type = "text" class = "form-control" required></div>
                <div class = "col-3">Discount Produk <input  id = "add_discountproduk" name = "add_dsc_produk" value = "0" type = "text" class = "form-control" required></div>
              </div>
              <div class = "row mt-3 mb-3">
                <div class = "col-12">Description Produk <input  id = "add_descriptionproduk" name = "add_desc_produk" type = "text" class = "form-control" ></div>
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
             
              
              {{-- <div class = "row mt-3 mb-3">
                <div class ="col-12" style = "text-align:right;"><input type = "submit" class ="btn btn-success "  value = "Tambah"></div>
              </div> --}}
              
            </form>
            <form id = "add_variant">
              <h4>Tambah Variant</h4>
              <div class = "row mt-3 mb-3">
                <div class = "col-1 image_upload_container">Gambar  <br><label for="add_gambarvariant0">
                  <img id = "gambar0" style = "width:50px;height:50px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/>
                </label>  <input id = "add_gambarvariant0" name = "add_gbr_produks[]" onchange="uploadgbrvariant(this)" type = "file" class = "form-control" > 
                </div>
                <div class = "col-3">Nama  <input  id = "add_namavariant0" name = "add_nama_produks[]" type = "text" class = "form-control" ></div>
                <div class = "col-2">Harga  <input id = "add_hargavariant0" name = "add_hrg_produks[]" type = "text" class = "form-control" ></div>
                <div class = "col-2">Stok  <input id = "add_stokvariant0" name = "add_stock_produks[]" value = "0" type = "text" class = "form-control" ></div>
                <div class = "col-2">Discount  <input  id = "add_discountvariant0" name = "add_dsc_produks[]" type = "text" class = "form-control" ></div>
              </div>
              <div id = "tambahan_variant">
                  <div id = "append_tambahan_variant"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
              <p style = "color:red" id = "peringatan"></p>
              <span style = "float:right;margin-right:30px;"><button type = "button" class = "btn btn-primary" onclick = "tambahvariantlain()"  >Tambah variant lain &nbsp;<i class = "fa fa-plus"></i></button></span>
              <div id="status"></div>
              <div class ="col-12" style = "text-align:right;"> <input style = "float:right;" type = "submit" class ="btn btn-success " id = "tambah_variant_button"  value = "Upload Variant"> </div>
            </div>
            </form>
             
            
            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}
      </div>
    </div>
  </div>
</div>

<div id = "alert_success" style = "position:fixed; right:50px; top:30px; z-index:1111555;display:none;" class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" id = "close_success"  aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  {{-- <div> --}}
    <span id = "isi_pesan"></span>
  {{-- </div> --}}
</div>
<div id = "alert_danger" style = "position:fixed; right:50px; top:30px; z-index:1111555;display:none;" class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" id = "close_danger"  data-hide="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  {{-- <div> --}}
    <span id = "isi_pesan_danger"></span>
  {{-- </div> --}}
</div>





  <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
  {{-- <script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script> --}}
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script> --}}

<script>
  
  $("#close_success").on("click", function(){
       $("#alert_success").hide();
    });
    $("#close_danger").on("click", function(){
      $("#alert_danger").hide();
    });
    var jumlahaddvariant = 0;
  var globalselectedproduct = "";
  // const alert = bootstrap.Alert.getOrCreateInstance('#alert_success');
   $(document).ready(function () {
    // alert.close();
   var mytable =  $('#table-product').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{url('/getlistproduk')}}",
      scrollY: "500px",
        scrollX: false,
        scrollCollapse: true,
      // scrollCollapse: false,
      autoWidth: false,
      order:[0,"desc"],
      autoWidth:false,
      columns: [
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
           data: 'category_name'
        },
        {
           data: 'names'
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
            return '<button class="btn btn-warning" onclick = "getdetailTransaction(this)" data-id = "'+row.id+'" btn-sm" data-toggle="modal" data-target="#modal_detail_product" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn btn-danger" onclick = "getStatusChange(this)" data-id = "'+row.id+'" btn-sm"  ><i class="fa fa-exchange" aria-hidden="true"></i></button>&nbsp;<button class="btn btn-danger" onclick = "delete_product(this)" data-id = "'+row.id+'" btn-sm"  ><i class="fa fa-trash" aria-hidden="true"></i></button>';
          }
        }
      ],
    });
  });


  function getdetailTransaction(myobj){
    var productid = $(myobj).attr("data-id");
    globalselectedproduct = productid;
    $("#hasil_peringatan_update_all").text("");
    $("#form_update_all_stock").trigger("reset");
    $.ajax({
      type: "get",
      url: "{{url('/getdetailproductadmin')}}",
      data: {"idproduct" : productid},
      dataType: "json",
      success: function (response) {
        $("#isian_variant_produk").html("");
        $("#isian_variant_produk").html(response.output);
        $("#edit_kategory_product").val(response.output_proudct[0].category_id);

     
        $("#edit_stocksproduk").val(response.output_proudct[0].stocks);
        $("#edit_namaproduk").val(response.output_proudct[0].names);
        $("#edit_hargaproduk").val(response.output_proudct[0].prices);
        $("#edit_discountproduk").val(response.output_proudct[0].discounts);
        $("#edit_descriptionproduk").val(response.output_proudct[0].descriptions);

      }
    });

  }
  
  function getdetailEditTransaction(id){
  
    var productid = id;
    $.ajax({
      type: "get",
      url: "{{url('/getdetailproductadmin')}}",
      data: {"idproduct" : productid},
      dataType: "json",
      success: function (response) {
        $("#isian_variant_produk").html("");
        $("#isian_variant_produk").html(response.output);
        $("#edit_kategory_product").val(response.output_proudct[0].category_id);
      
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

      }
    });
  }
  function fire_alert(isipesan) {
    $("#isi_pesan").text(isipesan);

    $('#alert_success').fadeIn(1000);
    setTimeout(function() { 
        $('#alert_success').fadeOut(2000); 
    }, 5000);
  }
  function fire_alert_danger(isipesan) {
    $("#isi_pesan_danger").text(isipesan);
 
    $('#alert_danger').fadeIn(1000);
    setTimeout(function() { 
        $('#alert_danger').fadeOut(2000); 
    }, 5000);
  }
  $("#form_update_all_stock").on('submit',(function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        formdata.append('id_product', globalselectedproduct);
        $.ajax({
          url: "{{route('edit_stock_variant_massal_admin')}}",
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            contentType: false,
            cache: false,
            processData:false,
            complete: function() { 
           
              
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
              fire_alert_danger("Update Stock Semua Variant Gagal");
            },
            success: function(data){
              getdetailEditTransaction(globalselectedproduct);
              fire_alert("Update Stock Semua Variant Berhasil");
              $("#form_update_all_stock").trigger("reset");
            },
        });
    }));
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
              // $("#closeeditproduct").click();
              fire_alert("Edit Product Berhasil");

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
              fire_alert_danger("Edit Product Gagal");
            },
        });
    }));

      $("#formtambah").on('submit',(function(e){
          e.preventDefault();
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
      function editforvariant(myobj){
        // fire_alert("Edit Variant Ini Berhasil");
        // new bootstrap.Alert($("alert_success"));
        var idvariant = $(myobj).attr("data-id");
        var names_baru = $("#variant_names_edit"+idvariant).val();
        var stock_baru = $("#variant_stock_edit"+idvariant).val();
        var disctount_baru = $("#variant_discount_edit"+idvariant).val();
        var price_baru = $("#variant_price_edit"+idvariant).val();

        var formdata = new FormData();
        formdata.append('id_variant', idvariant);
        formdata.append('nama_baru', names_baru);
        formdata.append('stock_baru', stock_baru);
        formdata.append('discount_baru', disctount_baru);
        formdata.append('price_baru', price_baru);
        $.ajax({
          url: "{{url('/editproductpervariantsadmin')}}",
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
            dataType:"json",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
              fire_alert("Edit Variant Ini Berhasil");
           
            },
        });

      }
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

      function delete_product(myobj){
        var id_product = $(myobj).attr("data-id");
        $.ajax({
          type: "post",
          url: "{{url('/changestatusdeleteproduct')}}",
          data: { "_token": "{{ csrf_token() }}","id_product" : id_product},
          dataType: "json",
          success: function (response) {
            $('#table-product').DataTable().ajax.reload();
            Swal.fire({
                  title: "<strong>Produk ini telah dihapus</strong>",
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
          
            
          }
        });
      }
      function delete_Variant(myobj){
        var id_variants = $(myobj).attr("data-id");
        $.ajax({
          type: "post",
          url: "{{url('/changestatusdeletevariant')}}",
          data: { "_token": "{{ csrf_token() }}","id_variant" : id_variants},
          dataType: "json",
          success: function (response) {
            // $('#table-product').DataTable().ajax.reload();
            var table_row = $(myobj).closest("tr");
            table_row.remove(); 
          }
        });
      }
      var jumlahedit_addvariant = 0;
      function edittambahvariantlain(){
      
        var stringelement = '<div class ="row mt-3 mb-3" id = "row_edit_'+(jumlahedit_addvariant+1)+'"><div class = "col-1 edit_image_upload_container" >Gambar<label for="edit_add_gambarvariant'+(jumlahedit_addvariant+1)+'"><img style = "width:50px;height:50px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></label> <input id = "edit_add_gambarvariant'+(jumlahedit_addvariant+1)+'"  name = "edit_add_gbr_produks[]" type = "file" class = "form-control" onchange="editadduploadgbrvariant(this)"> </div><div class = "col-3">Nama <input name = "edit_add_nama_produks[]" type = "text" class = "form-control" required></div><div class = "col-2">Harga <input name = "edit_add_hrg_produks[]" type = "text" class = "form-control" required></div>   <div class = "col-2">Stok <input id = "edit_add_stokproduk" name = "edit_add_stock_produks[]" value = "0" type = "text" class = "form-control" required></div>                <div class = "col-2">Discount <input   name = "edit_add_dsc_produks[]" type = "text" class = "form-control" ></div><div class = "col-1"><br><button class = "btn btn-danger" onclick = "edit_removevariantlain(this)" data-id-jumlah = "'+(jumlahedit_addvariant+1)+'"><i class = "fa fa-trash"></i></button></div></div>';
        $("#edit_append_tambahan_variant").append(stringelement);
        jumlahedit_addvariant +=1;
      }
      function tambahvariantlain(){
        var stringelement = '<div class ="row mt-3 mb-3" id = "row_add_'+(jumlahaddvariant+1)+'"><div class = "col-1 image_upload_container" >Gambar<label for="add_gambarvariant'+(jumlahaddvariant+1)+'"><img style = "width:50px;height:50px;" src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"/></label> <input id = "add_gambarvariant'+(jumlahaddvariant+1)+'"  name = "add_gbr_produks[]" type = "file" class = "form-control" onchange="uploadgbrvariant(this)"> </div><div class = "col-3">Nama <input name = "add_nama_produks[]" type = "text" class = "form-control" required></div><div class = "col-2">Harga <input name = "add_hrg_produks[]" type = "text" class = "form-control" required></div>   <div class = "col-2">Stok <input id = "add_stokproduk" name = "add_stock_produks[]" value = "0" type = "text" class = "form-control" required></div>                <div class = "col-2">Discount <input   name = "add_dsc_produks[]" type = "text" class = "form-control" ></div><div class = "col-1"><br><button class = "btn btn-danger" onclick = "removevariantlain(this)" data-id-jumlah = "'+(jumlahaddvariant+1)+'"><i class = "fa fa-trash"></i></button></div></div>';
        $("#append_tambahan_variant").append(stringelement);
        jumlahaddvariant +=1;
      }
      function edit_removevariantlain(myobj){
        var idjumlah =  $(myobj).attr("data-id-jumlah");
        $("#row_edit_"+idjumlah).remove();
      }
      function removevariantlain(myobj){
         var idjumlah =  $(myobj).attr("data-id-jumlah");
         $("#row_add_"+idjumlah).remove();
      }
      function gantigambarvariant(myobj){
        var id_variant = $(myobj).attr("data-id");
        var value_gambar = $("#change_image"+id_variant)[0].files[0];
        $('#preview_image_'+id_variant).html('<img src = "'+URL.createObjectURL(value_gambar) + '"  id = "edit_buat_gambar_'+id_variant+'" style = "width:50px;height:50px;">');
        var formdata = new FormData();
            formdata.append('gbr', value_gambar);
            formdata.append('id_gambar_variant', id_variant);
            $.ajax({
              type: "post",
              url: "{{url('/edit_gambarvariant')}}",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
                  contentType: false,
                  cache: false,
                  processData:false,
              dataType: "json",
              success: function (response) {
                fire_alert("Ganti Gambar Variant Gagal Berhasil");
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                fire_alert_danger("Ganti Gambar Variant Gagal");
                  },
            });
      }
      function editadduploadgbrvariant(myobj){
        
        var data_id_check = $(myobj).attr("data-id");
        if(data_id_check){
            var formdata = new FormData();
            formdata.append('gbr', $(myobj)[0].files[0]);
            // formdata.append("id_products", globalselectedproduct);
            // formdata.append('id_products', id_product);
            formdata.append('id_gambar_variant', data_id_check);
            $.ajax({
              type: "post",
              url: "{{url('/edit_updategambarvariants')}}",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
                  contentType: false,
                  cache: false,
                  processData:false,
              dataType: "json",
              success: function (response) {
                $("#peringatan").text("");
                var isifile = $(myobj)[0].files[0];
                var path=$(myobj).closest('.edit_image_upload_container').find('img');
                path.attr("src", URL.createObjectURL(isifile));
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                var path=$(myobj).closest('.edit_image_upload_container').find('img');
                path.attr("src", "{{asset('images/fail.png')}}");
                $("#peringatan").text("Ada error, cek gambar fail, upload gambar ulang !");
                  },
            });
        }
        else{
          // var id_product = $("#add_kategory_product").val();
          var gambar = $(myobj);
          var formdata = new FormData();
          formdata.append('gbr', $(myobj)[0].files[0]);
          formdata.append("id_for_products", globalselectedproduct);
          // formdata.append('id_products', id_product);
          $.ajax({
            type: "post",
            url: "{{url('/edit_tambahgambarvariant')}}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: formdata,
                contentType: false,
                cache: false,
                processData:false,
            dataType: "json",
            success: function (response) {
              var myfiles = $(myobj).files;
              // alert($(myobj).prev().find('img').attr("id"));
              $(myobj).append("<input type = 'hidden' name='id[]' value = "+response.output+">");
              $(myobj).attr("data-id", response.output);
              var isifile = $(myobj)[0].files[0];
              var path=$(myobj).closest('.edit_image_upload_container').find('img');
              path.attr("src", URL.createObjectURL(isifile));
              $("#peringatan").text("");
            
              
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
              var path=$(myobj).closest('.edit_image_upload_container').find('img');
              path.attr("src", "{{asset('images/fail.png')}}");
                  $("#peringatan").text("Ada error, cek gambar fail, upload ulang !");
              },
          });
        }
      
        
      }
      function uploadgbrvariant(myobj){
        var data_id_check = $(myobj).attr("data-id");
        if(data_id_check){
          
        
            var formdata = new FormData();
            formdata.append('gbr', $(myobj)[0].files[0]);

            // formdata.append('id_products', id_product);
            formdata.append('id_gambar_variant', data_id_check);
            $.ajax({
              type: "post",
              url: "{{url('/updategambarvariant')}}",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
                  contentType: false,
                  cache: false,
                  processData:false,
              dataType: "json",
              success: function (response) {
                $("#peringatan").text("");
                var isifile = $(myobj)[0].files[0];
                var path=$(myobj).closest('.image_upload_container').find('img');
                path.attr("src", URL.createObjectURL(isifile));
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                var path=$(myobj).closest('.image_upload_container').find('img');
                path.attr("src", "{{asset('images/fail.png')}}");
                $("#peringatan").text("Ada error, cek gambar fail, upload gambar ulang !");
                  },
            });
        }
        else{
          var id_product = $("#add_kategory_product").val();
        var gambar = $(myobj);
        var formdata = new FormData();
        formdata.append('gbr', $(myobj)[0].files[0]);

        formdata.append('id_products', id_product);
        $.ajax({
          type: "post",
          url: "{{url('/tambahgambarvariant')}}",
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: formdata,
              contentType: false,
              cache: false,
              processData:false,
          dataType: "json",
          success: function (response) {
            var myfiles = $(myobj).files;
            // alert($(myobj).prev().find('img').attr("id"));
            $(myobj).append("<input type = 'hidden' name='id[]' value = "+response.output+">");
            $(myobj).attr("data-id", response.output);
            var isifile = $(myobj)[0].files[0];
            var path=$(myobj).closest('.image_upload_container').find('img');
            path.attr("src", URL.createObjectURL(isifile));
            $("#peringatan").text("");
          
            
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) { 
            var path=$(myobj).closest('.image_upload_container').find('img');
            path.attr("src", "{{asset('images/fail.png')}}");
                $("#peringatan").text("Ada error, cek gambar fail, upload ulang !");
            },
        });
        }
      
        
      }
      $("#add_variant").on('submit',(function(e){
          e.preventDefault();
          // var img=$('#add_gambarproduk').serialize();
          // var stringparam = '&gbr_product='+img+'&kategori='+$("#add_kategory_product").val()+'&nama_product='+$("#add_namaproduk").val()+'&harga_product='+$("#add_hargaproduk").val()+'&discount_product='+$("#add_discountproduk").val()+'&desc_product='+$("#add_descriptionproduk").val();
          var formdata = new FormData($(this)[0]);
          formdata.delete('add_gbr_produks[]');
          formdata.append('gbr_product', $("#add_gambarproduk")[0].files[0]);
          formdata.append('kategori', $("#add_kategory_product").val());
          formdata.append('nama_product', $("#add_namaproduk").val());
          formdata.append('harga_product', $("#add_hargaproduk").val());
          formdata.append('discount_product', $("#add_discountproduk").val());
          formdata.append('desc_product', $("#add_descriptionproduk").val());

          $.ajax({
            xhr: function () {
                        var xhr = new window. XMLHttpRequest();
                                            xhr.upload.addEventListener("progress", function (evt) {
                                                if (evt.lengthComputable) {
                                                    var percentComplete = evt.loaded / evt.total;
                                                    percentComplete = parseInt(percentComplete * 100);
                                                    console.log(percentComplete);
                                                    $('.progress-bar').css('width', percentComplete + '%');
                                                    if (percentComplete === 100) {
                                                        // console.log('completed 100%')
                                                        // var imageUrl = window.URL.createObjectURL(photo)
                                                        // $('.imgPreview').attr('src', imageUrl);
                                                        setTimeout(function () {
                                                            $('.progress-bar').css('width', '0%');
                                                        }, 2000)
                                                    }
                                                }
                                            }, false);
                                            return xhr;
                    },
            url: "{{url('/addproductwithvariantadmin')}}",
              type: "POST",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
              contentType: false,
              // cache: false,
              processData:false,
              dataType: "json",
              beforeSend: function() {
              $('#tambah_variant_button').prop('disabled',true);
              $('#tambah_variant_button').text('Uploading...');
              var percentage = '0';
              }, 
              uploadProgress: function (event, position, total, percentComplete) {
          
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
              },
              complete: function() {
              $('#tambah_variant_button').prop('disabled',false);
              $('#tambah_variant_button').text('Upload Variant');
              $("#gambar0").attr("src","https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png");
              $("#add_gambarvariant0").removeAttr("data-id");
              $(".image_upload_container input[type='hidden']").remove();
              },
              success: function(data){
                $("#gambar0").attr("src","https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png");
                $("#add_gambarproduk").val("");
                $("#add_namaproduk").val("");
                $("#add_hargaproduk").val("");
                $("#add_discountproduk").val("");
                $("#add_descriptionproduk").val("");
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
                var string_kembar = "";
                if(data.output_same.length>0){
                  string_kembar =" tetapi ada nama variant kembar : ";
                  data.output_same.forEach(function(element, index, array) {
                      if(index > 0){
                        string_kembar += ",";
                      }
                      string_kembar += element;
                  });
                  string_kembar+= ". ";
                }
                // alert(string_kembar);
                $("#add_tanggal_alert_success").html("Sukses " + string_kembar + tgl);
                $("#add_variant").trigger("reset");
                $("#append_tambahan_variant").html("");

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
      $("#add_edit_tambah_variant").on("submit", function(e){
        e.preventDefault();
        var formdata = new FormData($(this)[0]);
        formdata.delete('edit_add_gbr_produks[]');
        // formdata.append('id_products', $("#add_kategory_product").val());
        $.ajax({
            xhr: function () {
                        var xhr = new window. XMLHttpRequest();
                                            xhr.upload.addEventListener("progress", function (evt) {
                                                if (evt.lengthComputable) {
                                                    var percentComplete = evt.loaded / evt.total;
                                                    percentComplete = parseInt(percentComplete * 100);
                                                    console.log(percentComplete);
                                                    $('.progress-bar').css('width', percentComplete + '%');
                                                    if (percentComplete === 100) {
                                                        // console.log('completed 100%')
                                                        // var imageUrl = window.URL.createObjectURL(photo)
                                                        // $('.imgPreview').attr('src', imageUrl);
                                                        setTimeout(function () {
                                                            $('.progress-bar').css('width', '0%');
                                                        }, 2000)
                                                    }
                                                }
                                            }, false);
                                            return xhr;
                    },
            url: "{{url('/edit_addproductwithvariantadmin')}}",
              type: "POST",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              data: formdata,
              contentType: false,
              // cache: false,
              processData:false,
              dataType: "json",
              beforeSend: function() {
              $('#edit_tambah_variant_button').prop('disabled',true);
              $('#edit_tambah_variant_button').text('Uploading...');
              var percentage = '0';
              }, 
              uploadProgress: function (event, position, total, percentComplete) {
          
                        var percentage = percentComplete;
                        $('.progress-bar').css("width", percentage+'%', function() {
                            return $(this).attr("aria-valuenow", percentage) + "%";
                        })
              },
              complete: function() {
                getdetailEditTransaction(globalselectedproduct);
              $('#edit_tambah_variant_button').prop('disabled',false);
              $('#edit_tambah_variant_button').text('Upload Variant');
              $("#edit_gambar0").attr("src","https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png");
              $("#edit_add_gambarvariant0").removeAttr("data-id");
              $(".edit_image_upload_container input[type='hidden']").remove();
              },
              success: function(data){
                $("#edit_gambar0").attr("src","https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png");
                $('#table-product').DataTable().ajax.reload();
                var currentdate = new Date(); 
                var tgl =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                $("#edit_add_alert_notif_danger").attr("style", "display: none !important");
                $("#edit_add_alert_notif_success").attr("style", "display: block !important");
                $("#edit_add_tanggal_alert_success").html(tgl);
                $("#add_edit_tambah_variant").trigger("reset");
                $("#edit_append_tambahan_variant").html("");

              },
              error: function(XMLHttpRequest, textStatus, errorThrown) { 
                var currentdate = new Date(); 
                var tgl =  currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();
                $("#edit_add_alert_notif_success").attr("style", "display: none !important");
                $("#edit_add_alert_notif_danger").attr("style", "display: block !important");
                $("#edit_add_tanggal_alert_danger").html(tgl);
              },
          });
      })
      
</script>
