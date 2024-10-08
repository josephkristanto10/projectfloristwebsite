<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Superadmin;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionHistory;
use App\Models\ProductVariant;
use App\Models\Category;


use File;
use DataTables;
use Hash;
use Session;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Session::has('id_superadmin')){
           $visitor = Visitor::all();
           $product = Product::all();
           $transaction = Transaction::all();
            return view('admin.index', compact('visitor','product','transaction'));
        }else{
            return view('admin.login');
        }
    }
    public function loginadmincheck(Request $request){
        $username = $request->user;
        $password = $request->pass;

        $myhashpassword = bcrypt("mypwd");
        $myadmin = Superadmin::where("user","=",$username)->get();
        if($myadmin->count() > 0){
            if(Hash::check($password, $myadmin[0]->pass)) {
                Session::put('id_superadmin',$myadmin[0]->id);
                Session::put('nama_superadmin',$myadmin[0]->name);
                return "cocok";
            }
            else{
                return "tidak cocok";
            }
        }
        else{
            return "tidak ada data";
        }
      
        
    }
    public function listproduk(){
        if(Session::has('id_superadmin')){
            $cat = Category::all();
            return view('admin.product', compact("cat"));
         }else{
             return view('admin.login');
         }
   
    }
    public function getlistproduk(){
        
        if(Session::has('id_superadmin')){
            $data = Product::leftJoin("category", "category.id", "=","product.product_category")->where("status_product_delete", '=', '0')->select("product.*", "category.category_name")->get();
             return DataTables::of($data)->make(true);
         }else{
             return view('admin.login');
         }
    }
    public function listuser(){
        if(Session::has('id_superadmin')){
            return view('admin.user');
         }else{
             return view('admin.login');
         }
    }
    public function getlistuser(){
        
        if(Session::has('id_superadmin')){
            $data = Visitor::all();
             return DataTables::of($data)->make(true);
         }else{
             return view('admin.login');
         }
    }
    public function listtrx(){
        if(Session::has('id_superadmin')){
            return view('admin.transaction');
         }else{
             return view('admin.login');
         }
    }
    public function getlisttrx(){
        
        if(Session::has('id_superadmin')){
            $data = Transaction::join("visitor","visitor.id",'=','transaction.id_user')->select("transaction.*","visitor.nama")->latest();
            // $mydatalast = $data->created_at->format('d M Y');
             return DataTables::of($data)->make(true);
         }else{
             return view('admin.login');
         }
    }
    public function getInvoiceDetailAdmin(Request $request ){
        $id_transaction = $request->idtrans;
        $myproduct = TransactionHistory::leftJoin("product", "product.id","=","transaction_history.id_product")
                    ->leftJoin("product_variant","product_variant.id","=","transaction_history.id_product_variant")
                    ->Join("transaction","transaction.id",'=',"transaction_history.id_transaction")
                    ->where("id_transaction","=",$id_transaction)
                    ->select("product.names as product_name","product.images as product_image", "product.descriptions as product_description", "product.discounts as product_discounts",  "product_variant.prices as variant_prices",   "product_variant.discounts as variant_discount","product_variant.descriptions as variant_descriptions", "transaction_history.qty as buy_qty", "transaction_history.subtotal as buy_subtotal", "transaction.total_price as total_invoice",DB::raw("DATE_FORMAT(transaction.created_at, '%d %b %Y') as date_invoice") , "transaction.id as id_invoice")->get();
                    $hasil = "";
      
                    foreach($myproduct as $mp){
                        $variant = "Tidak Ada";
                        if($mp->variant_descriptions != null){
                            $variant = $mp->variant_descriptions;
                        }
                        $hasil .= '<tr><td>'.$mp->product_name.'</td>'.'<td>'.$variant.'</td>'.'<td>'.$mp->buy_qty.'</td>'.'<td>'.$mp->buy_subtotal.'</td></tr>';
                    }
        return response()->json(['output' => $hasil]);
    }
    public function getdetailproductadmin(Request $request){
        $id_product = $request->idproduct;
        $hasil = "";
        $myproduct = ProductVariant::leftJoin("product",'product.id','=','product_variant.id_product')->where("product_variant.id_product",'=',$id_product)->where("product_variant.status_variant_delete",'=',"0")->select("product_variant.*","product.images as gambar_produk", "product.names as nama_produk", "product.prices as harga_produk", "product.discounts as discount_produk")->get();
        $products = Product::leftJoin("category", "category.id",'=',"product.product_category")->where("product.id",'=',$id_product)->select("product.*","category.category_name", "category.id as category_id")->get();
        foreach($myproduct as $mp){
           $gambar = asset('images/variant/'.$mp->images_variant);

            $hasil .= '<tr><td><label for="change_image'.$mp->id.'"><span id = "preview_image_'.$mp->id.'"><img id = "edit_buat_gambar_'.$mp->id.'"  src = "'.$gambar.'" style = "width:50px;height:50px;"></span></label> <input type = "file" style = "display:none;" data-id = "'.$mp->id.'" onchange = "gantigambarvariant(this)" class = "edit_image_variants" id= "change_image'.$mp->id.'"></td>'.'<td><input  class = "form-control" id = "variant_names_edit'.$mp->id.'" value = "'.$mp->descriptions.'" /></td><td style = "width:100px;"><input class = "form-control w-100" id = "variant_stock_edit'.$mp->id.'" value = "'.$mp->stocks.'" /></td>'.'<td><input class = "form-control w-100" id = "variant_discount_edit'.$mp->id.'" value = "'.$mp->discounts.'" /></td>'.'<td><input class = "form-control w-100" id = "variant_price_edit'.$mp->id.'" value = "'.$mp->prices.'" /></td><td><button onclick = "editforvariant(this)" class = "btn btn-warning" data-id = "'.$mp->id.'"><i class="fa fa-pencil" aria-hidden="true"></i></button> &nbsp;<button class = "btn btn-danger" data-id = "'.$mp->id.'" onclick = "delete_Variant(this)"><i class = "fa fa-trash"></button></td></tr>';
        }
        return response()->json(['output' => $hasil, "output_proudct"=>$products]);
    }
    public function edit_gambarvariant(Request $request){
        $id_variants = $request->id_gambar_variant;
        $file_product = $request->file('gbr');
        $tujuan_upload = public_path('images/variant');
        $nama_file = "variant".base64_encode(date("Y:m:d H:i:s")).".".$file_product->getClientOriginalExtension();
        $file_product->move($tujuan_upload, $nama_file);
        ProductVariant::where(['id' => $id_variants ])->update(["images_variant" => $nama_file]);
        return response()->json(['output' => "ok"]);
    }
    public function editproductadmin(Request $request){
        $kategori_product = $request->edit_kategori_produk;
        $id_product = $request->id_product;
        $nama_product = $request->nama_produk;
 
        $desc_produk = "";
        $status_gbr_product = "";
        $discount_product = 0;
        $harga_product = 0;
        $stock_product = 0;
        if($request->desc_produk != ""){
            $desc_produk = $request->desc_produk;
        }
        if($request->dsc_produk != ""){
            $discount_product = $request->dsc_produk;
        }
        if($request->hrg_produk != ""){
            $harga_product = $request->hrg_produk;
        }
        if($request->stocks_produk != ""){
            $stock_product = $request->stocks_produk;
        }
        if($request->hasFile('gbr_produk')) {
            $file_product = $request->file('gbr_produk');
            $tujuan_upload = public_path('images/product');
            $nama_file = "product".$id_product.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            Product::where(['id' => $id_product ])->update(['stocks'=>$stock_product,'names' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product, "descriptions"=>$desc_produk, "images" => $nama_file, "product_category" => $kategori_product]);

        }else{
            Product::where(['id' => $id_product ])->update(['stocks'=>$stock_product,'names' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product, "descriptions"=>$desc_produk,"product_category" => $kategori_product]);

        }
    }
    public function editproductvariantsadmin(Request $request){
        $id_variant = $request->id_variant;
        $nama_baru = $request->nama_baru;
        $stock_baru = $request->stock_baru;
        $discount_baru = $request->discount_baru;
        $price_baru = $request->price_baru;
        ProductVariant::where(['id' => $id_variant ])->update(['name'=>$nama_baru, 'descriptions'=>$nama_baru, "stocks"=> $stock_baru, "discounts" => $discount_baru, "prices" => $price_baru]);
        return response()->json(['output' => "ok"]);
    }
    public function editstockallvariantsadmin(Request $request){
        
        $id_product_global = $request->id_product;
        $jumlah_stock = $request->edit_all_stock_variant;
        ProductVariant::where(['id_product' => $id_product_global ])->update(['stocks'=>$jumlah_stock]);
        return response()->json(['output' => "ok"]);
    }

    public function editproductvariantadmin(Request $request){
        $id_productvariant = $request->id_variant_product;
        $nama_product = $request->desc_produk;
        $harga_product = $request->hrg_produk;
        $discount_product = $request->dsc_produk;
        $stock_product = $request->edit_stock_produk;
        
    
        $status_gbr_product = "";
        if($request->hasFile('gbr_produk')) {
            $file_product = $request->file('gbr_produk');
            $tujuan_upload = public_path('images/variant');
            $nama_file = "product_variant".$id_productvariant.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            ProductVariant::where(['id' => $id_productvariant ])->update(['stocks'=>$stock_product,'descriptions' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product,  "images_variant" => $nama_file]);

        }else{
            ProductVariant::where(['id' => $id_productvariant ])->update(['stocks'=>$stock_product,'descriptions' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product]);

        }
    }

    public function getdetailvariantproductadmin(Request $request){
        $id_productvariant = $request->idproductvariant;
        $hasil = "";
        // $myproduct = ProductVariant::leftJoin("product",'product.id','=','product_variant.id_product')->where("product_variant.id_product",'=',$id_product)->select("product_variant.*","product.images as gambar_produk", "product.names as nama_produk", "product.prices as harga_produk", "product.discounts as discount_produk")->get();
        $products = ProductVariant::where("id",'=',$id_productvariant)->get();
        // foreach($myproduct as $mp){
           
        //     $hasil .= '<tr><td>'.$mp->gambar_produk.'</td>'.'<td>'.$mp->descriptions.'</td>'.'<td>'.$mp->discounts.'</td>'.'<td>'.$mp->prices.'</td></tr>';
        // }
        return response()->json(['output' => "-", "output_proudct"=>$products]);
    }



    public function listvariant(){
        if(Session::has('id_superadmin')){
            $list_product = Product::latest()->get();
            return view('admin.variant_product', compact('list_product'));
         }else{
             return view('admin.login');
         }
    }
    public function getlistvariant(Request $request){
        
        if(Session::has('id_superadmin')){
            $data = ProductVariant::join("product","product.id",'=','product_variant.id_product')->where("status_variant_delete", '=', 0)->select("product_variant.*","product.names", "product.images")->get();
            // $mydatalast = $data->created_at->format('d M Y');
            $datatables = DataTables::of($data);
     
            return $datatables->make(true);
         }else{
             return view('admin.login');
         }
    }
    public function addproductadmin(Request $request){
        // $id_productvariant = $request->id_variant_product;
        $pilihan_category = $request->add_kategori_produk;
        $nama_product = $request->add_nama_produk;
        $harga_product = $request->add_hrg_produk;
        $discount_product = $request->add_dsc_produk;
        $desc_product =  $request->add_desc_produk;
        $stock_product = 0;
        $status_gbr_product = "";
        if($request->add_stocks_produk != ""){
            $stock_product = $request->add_stocks_produk;
        }
        if($request->hasFile('add_gbr_produk')) {
            $file_product = $request->file('add_gbr_produk');
            $tujuan_upload = public_path('images/product');
            // $nama_file = "product".$id_productvariant.".".$file_product->getClientOriginalExtension();
           
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            $myproduk = Product::create(["names" => $nama_product, "descriptions" => $desc_product, "prices" => $harga_product, "discounts" => $discount_product, "stocks" => $stock_product, "has_variants" => "0", "product_status" => "1", "status_product_delete" => "0","images" => "-", "product_category"=>$pilihan_category, "updated_at" => now(), "created_at" => now()]);
            $products_id = $myproduk->id;
            $nama_file = "product".$products_id.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            Product::where(['id' => $products_id ])->update(['images' => $nama_file]);


        }else{
            Product::insert(["names" => $nama_product, "descriptions" => $desc_product, "prices" => $harga_product, "discounts" => $discount_product, "stocks" => $stock_product, "has_variants" => "0", "product_status" => "1" , "status_product_delete" => "0", "images" => "-", "product_category"=>$pilihan_category, "updated_at" => now(), "created_at"=>now()]);


        }
    }
    public function addvariantproductadmin(Request $request){
        // $data = $request->all();
        $myallname = "";
        $pilihan_productvariant = $request->add_pil_produk;
        Product::where(['id' => $pilihan_productvariant ])->update(['has_variants' => 1]);
        $test = "";
        foreach( $request->add_nama_produk as $myindex => $dat){
        
        $nama_product = $request->add_nama_produk[$myindex];
        $harga_product = $request->add_hrg_produk[$myindex];
        $stockproduct = $request->add_stock_produk[$myindex];
        $discount_product = $request->add_dsc_produk[$myindex];
        if($request->add_dsc_produk[$myindex] == ""){
            $discount_product = 0;
        }
        
        // $desc_product =  $request->add_desc_produk;
        $status_gbr_product = "";
        // $images= $request->file('add_gbr_produk')[$myindex];
        if(isset($request->file('add_gbr_produk')[$myindex])){

            
                $file_product = $request->file('add_gbr_produk')[$myindex];
                $tujuan_upload = public_path('images/variant');
                // $nama_file = "product".$id_productvariant.".".$file_product->getClientOriginalExtension();
               
                $status_gbr_product = "ada";
                $myproduk = ProductVariant::create(["id_product" => $pilihan_productvariant,"stocks" => "1",  "prices" => $harga_product, "discounts" => $discount_product,"descriptions" => $nama_product, "stocks" => $stockproduct, "name" => $nama_product, "variant_status" => "1", "status_variant_delete" => "0","images_variant" => "test", "updated_at" => now(), "created_at" => now()]);
                $products_id = $myproduk->id;
                $nama_file = "product_variant".$products_id.".".$file_product->getClientOriginalExtension();
                $file_product->move($tujuan_upload, $nama_file);
                ProductVariant::where("id", '=', $products_id)->update(["images_variant" => $nama_file]);
            
        }
        else{
            $status_gbr_product = "tidak";
            $myproduk = ProductVariant::create(["id_product" => $pilihan_productvariant,"stocks" => "1",  "prices" => $harga_product, "discounts" => $discount_product,"descriptions" => $nama_product, "stocks" => $stockproduct, "name" => $nama_product, "variant_status" => "1" , "status_variant_delete" => "0","images_variant" => "-", "updated_at" => now(), "created_at" => now()]);
        }      
         }
        return response()->json(['output' => "ok"]);
    }
    public function changestatusvariant(Request $request){
        $id_variant = $request->idproductvariant;
        $status = ProductVariant::where("id",'=',$id_variant)->get();
        $status_variant = $status[0]['variant_status'];
        $ganti = "0";
        if($status_variant == "0"){
            $ganti = "1";
        }
        else{
            $ganti ="0";
        }
        ProductVariant::where(['id' => $id_variant ])->update(['variant_status' => $ganti]);
        return response()->json(['output' => "ok"]);
    }
    public function changestatusdeletevariants(Request $request){
        $id_variant = $request->id_variant;
        $status = ProductVariant::where("id",'=',$id_variant)->get();
        $status_variant = $status[0]['status_variant_delete'];
        $ganti = "0";
        if($status_variant == "0"){
            $ganti = "1";
        }
        else{
            $ganti ="0";
        }
        $images = $status[0]['images_variant'];
        $image_path = public_path().'/images/variant/'.$images;
        if(file_exists($image_path)){
            unlink($image_path);
        }
   

        ProductVariant::where(['id' => $id_variant ])->update(['status_variant_delete' => $ganti]);
        return response()->json(['output' => "ok"]);
    }
    public function changestatusdeleteproducts(Request $request){
        $id_product = $request->id_product;
        $status = Product::where("id",'=',$id_product)->get();
        $status_product = $status[0]['status_product_delete'];
        $ganti = "0";
        if($status_product == "0"){
            $ganti = "1";
        }
        else{
            $ganti ="0";
        }
        $images = $status[0]['images'];
        $image_path = public_path().'/images/product/'.$images;
        if(file_exists($image_path)){
            unlink($image_path);
        }
   
        Product::where(['id' => $id_product])->update(['status_product_delete' => $ganti]);
        return response()->json(['output' => "ok"]);
    }
    public function changestatusproduct(Request $request){
        $id_product = $request->idproduct;
        $status = Product::where("id",'=',$id_product)->get();
        $status_product = $status[0]['product_status'];
        $ganti = "0";
        if($status_product == "0"){
            $ganti = "1";
        }
        else{
            $ganti ="0";
        }
        Product::where(['id' => $id_product ])->update(['product_status' => $ganti]);
        return response()->json(['output' => "ok"]);

    }
    public function getlistcategory(){
        $data = Category::latest("id");
        // $mydatalast = $data->created_at->format('d M Y');
         return DataTables::of($data)->make(true);
    }
    public function listcategory(){
        if(Session::has('id_superadmin')){
            return view('admin.category');
         }else{
             return view('admin.login');
         }
    }
    public function addcategoryadmin(Request $request){
        $nama_category = $request->add_nama_category;
        
        $status_gbr_category = "";
        if($request->hasFile('add_gbr_category')) {
            $file_product = $request->file('add_gbr_category');
            $tujuan_upload = public_path('images/category');
            // $nama_file = "product".$id_productvariant.".".$file_product->getClientOriginalExtension();
           
            $status_gbr_category = "ada";
        }
       
        if($status_gbr_category == "ada"){
            $mycategory = Category::create(["category_name" => $nama_category, "category_image" => "-", "category_status" => "1", "updated_at" => now(), "created_at" => now()]);
            $category_id = $mycategory->id;
            $nama_file = "category".$category_id.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            Category::where(['id' => $category_id ])->update(['category_image' => $nama_file]);
        }else{
            $mycategory = Category::create(["category_name" => $nama_category, "category_image" => "-", "category_status" => "1", "updated_at" => now(), "created_at" => now()]);
        }
    }
    public function getdetailcategoryadmin(Request $request){
        $category_id = $request->idcategory;
        $search_category = Category::where("id","=",$category_id)->get();
        return response()->json(['output' => $search_category]);
    }
    public function editcategoryadmin(Request $request){
        $nama_category = $request->nama_category;
        $id_Category = $request->id_category;
        

        $status_gbr_category = "";
        if($request->hasFile('gbr_category')) {
            $file_product = $request->file('gbr_category');
            $tujuan_upload = public_path('images/category');
            $nama_file = "category".$id_Category.".".$file_product->getClientOriginalExtension();
            $status_gbr_category = "ada";
        }
       
        if($status_gbr_category == "ada"){
            $file_product->move($tujuan_upload, $nama_file);
            Category::where(['id' => $id_Category ])->update(['category_name' => $nama_category,'category_image' => $nama_file]);
        }else{
            Category::where(['id' => $id_Category ])->update(['category_name' => $nama_category]);
        }
    }
    public function changestatuscategory(Request $request){
        $id_category = $request->idcategory;
        $status = Category::where("id",'=',$id_category)->get();
        $status_category = $status[0]['category_status'];
        $ganti = "0";
        if($status_category == "0"){
            $ganti = "1";
        }
        else{
            $ganti ="0";
        }
        Category::where(['id' => $id_category ])->update(['category_status' => $ganti]);
        return response()->json(['output' => "ok"]);
    }
    public function tambahgambarvariant(Request $request){
        $id_product  = $request->id_products;
        $file_product = $request->file("gbr");
        $tujuan_upload = public_path('images/variant');
        $mystr = "variant".base64_encode(date("Y:m:d H:i:s")).".".$file_product->getClientOriginalExtension();
      
        $file_product->move($tujuan_upload, $mystr);
        
        $myproduk = ProductVariant::create(["id_product" => 0,"stocks" => "1",  "prices" => 0, "discounts" => 0,"descriptions" => " ", "stocks" => "0", "name" => " ", "variant_status" => "1" , "status_variant_delete" => "1","images_variant" => $mystr, "updated_at" => now(), "created_at" => now()]);
        return response()->json(['output' => $myproduk->id]);
    }
    public function edit_tambahgambarvariant(Request $request){
        $id_product  = $request->id_for_products;
        $file_product = $request->file("gbr");
        $tujuan_upload = public_path('images/variant');
        $mystr = "variant".base64_encode(date("Y:m:d H:i:s")).".".$file_product->getClientOriginalExtension();
      
        $file_product->move($tujuan_upload, $mystr);
        
        $myproduk = ProductVariant::create(["id_product" => $id_product,"stocks" => "1",  "prices" => 0, "discounts" => 0,"descriptions" => " ", "stocks" => "0", "name" => " ", "variant_status" => "1" , "status_variant_delete" => "1","images_variant" => $mystr, "updated_at" => now(), "created_at" => now()]);
        return response()->json(['output' => $myproduk->id]);
    }
    
    public function addproductwithvariantadmin( Request $request){

        $pilihan_category = $request->kategori;
        $nama_product = $request->nama_product;
        $harga_product = $request->harga_product;
        $desc_product =  $request->desc_product;
        $discount_product = $request->discount_product;
        $stock_product = 0;
        if($request->desc_product == ""){
            $desc_product = "";
        }
        if($request->discount_product == ""){
            $discount_product = 0;
        }
        if($request->harga_product == ""){
            $harga_product = "0";
        }
        if($request->add_stocks_produk != ""){
            $stock_product = $request->add_stocks_produk;
        }
        $file_product = $request->file('gbr_product');
        $tujuan_upload = public_path('images/product');

        $mystr = "product".base64_encode(date("Y:m:d H:i:s")).".".$file_product->getClientOriginalExtension();
       
        if($request->add_nama_produks[0]){
            $myproduk = Product::create(["names" => $nama_product, "descriptions" => $desc_product, "prices" => $harga_product, "discounts" => $discount_product, "stocks" => $stock_product, "has_variants" => "1", "product_status" => "1", "status_product_delete" => "0","images" => $mystr, "product_category"=>$pilihan_category, "updated_at" => now(), "created_at" => now()]);
            $products_id = $myproduk->id;
            $array_nama_product_sama = [];
            foreach( $request->add_nama_produks as $myindex => $dat){
                $hideen_id = $request->id[$myindex];
                $jumlah_sama =  ProductVariant::where("id_product","=",$products_id)->where("name",'=',$request->add_nama_produks[$myindex])->get();
                if($jumlah_sama->count() == 0){
                    $hideen_id = $request->id[$myindex];
                    $nama_products = $request->add_nama_produks[$myindex];
                    $harga_products = $request->add_hrg_produks[$myindex];
                    $stockproducts = $request->add_stock_produks[$myindex];
                    $discount_products = $request->add_dsc_produks[$myindex];
                    if($request->add_dsc_produks[$myindex] == ""){
                        $discount_products = 0;
                    }
                    ProductVariant::where(['id' => $hideen_id ])->update(['id_product' => $products_id,'name'=>$nama_products,'descriptions'=>$nama_products, "prices"=>$harga_products, "discounts" => $discount_products, "stocks"=>$stockproducts, "status_variant_delete" => "0"]);
                }
                else{
                    $array_nama_product_sama[] = $request->add_nama_produks[$myindex];
                }
                
            }

        }
        else{
            $myproduk = Product::create(["names" => $nama_product, "descriptions" => $desc_product, "prices" => $harga_product, "discounts" => $discount_product, "stocks" => $stock_product, "has_variants" => "0", "product_status" => "1", "status_product_delete" => "0","images" => $mystr, "product_category"=>$pilihan_category, "updated_at" => now(), "created_at" => now()]);
            $products_id = $myproduk->id;
            $array_nama_product_sama = [];
        }
        $file_product->move($tujuan_upload, $mystr);
        return response()->json(['output' => "ok","output_same"=>$array_nama_product_sama]);
    }
    public function edit_addproductwithvariantadmin(Request $request){
        foreach( $request->edit_add_nama_produks as $myindex => $dat){
            $hideen_id = $request->id[$myindex];
            $nama_products = $request->edit_add_nama_produks[$myindex];
            $harga_products = $request->edit_add_hrg_produks[$myindex];
            $stockproducts = $request->edit_add_stock_produks[$myindex];
            $discount_products = $request->edit_add_dsc_produks[$myindex];
            if($request->edit_add_dsc_produks[$myindex] == ""){
                $discount_products = 0;
            }
            ProductVariant::where(['id' => $hideen_id ])->update(['name'=>$nama_products,'descriptions'=>$nama_products, "prices"=>$harga_products, "discounts" => $discount_products, "stocks"=>$stockproducts, "status_variant_delete" => "0"]);
         
        }
        return response()->json(['output' => "ok"]);
    }
    public function updategambarvariants(Request $request){
        $id_variant  = $request->id_gambar_variant;
        $file_product = $request->file("gbr");
        $tujuan_upload = public_path('images/variant');
        $get_gambar = ProductVariant::where("id", "=", $id_variant)->select("images_variant")->get();
        $mystr = $get_gambar[0]['images_variant'];
      
        $file_product->move($tujuan_upload, $mystr);
        
        // $myproduk = ProductVariant::create(["id_product" => 0,"stocks" => "1",  "prices" => 0, "discounts" => 0,"descriptions" => " ", "stocks" => "0", "name" => " ", "variant_status" => "1" , "status_variant_delete" => "1","images_variant" => $mystr, "updated_at" => now(), "created_at" => now()]);
        return response()->json(['output' => "ok"]);
    }
    public function edit_updategambarvariants(Request $request){
        $id_variant  = $request->id_gambar_variant;
        $file_product = $request->file("gbr");
        $tujuan_upload = public_path('images/variant');
        $get_gambar = ProductVariant::where("id", "=", $id_variant)->select("images_variant")->get();
        $mystr = $get_gambar[0]['images_variant'];
      
        $file_product->move($tujuan_upload, $mystr);
        
        // $myproduk = ProductVariant::create(["id_product" => 0,"stocks" => "1",  "prices" => 0, "discounts" => 0,"descriptions" => " ", "stocks" => "0", "name" => " ", "variant_status" => "1" , "status_variant_delete" => "1","images_variant" => $mystr, "updated_at" => now(), "created_at" => now()]);
        return response()->json(['output' => "ok"]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}