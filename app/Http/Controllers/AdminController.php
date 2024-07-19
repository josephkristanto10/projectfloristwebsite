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
        $myproduct = ProductVariant::leftJoin("product",'product.id','=','product_variant.id_product')->where("product_variant.id_product",'=',$id_product)->select("product_variant.*","product.images as gambar_produk", "product.names as nama_produk", "product.prices as harga_produk", "product.discounts as discount_produk")->get();
        $products = Product::leftJoin("category", "category.id",'=',"product.product_category")->where("product.id",'=',$id_product)->select("product.*","category.category_name", "category.id as category_id")->get();
        foreach($myproduct as $mp){
           $gambar = asset('images/variant/'.$mp->images_variant);

            $hasil .= '<tr><td><img src = "'.$gambar.'" style = "width:50px;height:50px;"></td>'.'<td>'.$mp->descriptions.'</td>'.'<td>'.$mp->discounts.'</td>'.'<td>'.$mp->prices.'</td></tr>';
        }
        return response()->json(['output' => $hasil, "output_proudct"=>$products]);
    }
    public function editproductadmin(Request $request){
        $kategori_product = $request->edit_kategori_produk;
        $id_product = $request->id_product;
        $nama_product = $request->nama_produk;
        $harga_product = $request->hrg_produk;
        $discount_product = $request->dsc_produk;
        $desc_produk = $request->desc_produk;
        $status_gbr_product = "";
        if($request->hasFile('gbr_produk')) {
            $file_product = $request->file('gbr_produk');
            $tujuan_upload = public_path('images/product');
            $nama_file = "product".$id_product.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            Product::where(['id' => $id_product ])->update(['names' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product, "descriptions"=>$desc_produk, "images" => $nama_file, "product_category" => $kategori_product]);

        }else{
            Product::where(['id' => $id_product ])->update(['names' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product, "descriptions"=>$desc_produk,"product_category" => $kategori_product]);

        }
    }

    public function editproductvariantadmin(Request $request){
        $id_productvariant = $request->id_variant_product;
        $nama_product = $request->desc_produk;
        $harga_product = $request->hrg_produk;
        $discount_product = $request->dsc_produk;
    
        $status_gbr_product = "";
        if($request->hasFile('gbr_produk')) {
            $file_product = $request->file('gbr_produk');
            $tujuan_upload = public_path('images/variant');
            $nama_file = "product_variant".$id_productvariant.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            ProductVariant::where(['id' => $id_productvariant ])->update(['descriptions' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product,  "images_variant" => $nama_file]);

        }else{
            ProductVariant::where(['id' => $id_productvariant ])->update(['descriptions' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product]);

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
    public function getlistvariant(){
        
        if(Session::has('id_superadmin')){
            $data = ProductVariant::join("product","product.id",'=','product_variant.id_product')->where("status_variant_delete", '=', 0)->select("product_variant.*","product.names", "product.images")->get();
            // $mydatalast = $data->created_at->format('d M Y');
             return DataTables::of($data)->make(true);
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
        $status_gbr_product = "";
        if($request->hasFile('add_gbr_produk')) {
            $file_product = $request->file('add_gbr_produk');
            $tujuan_upload = public_path('images/product');
            // $nama_file = "product".$id_productvariant.".".$file_product->getClientOriginalExtension();
           
            $status_gbr_product = "ada";
        }
       
        if($status_gbr_product == "ada"){
            $myproduk = Product::create(["names" => $nama_product, "descriptions" => $desc_product, "prices" => $harga_product, "discounts" => $discount_product, "stocks" => "1", "has_variants" => "0", "product_status" => "1", "status_product_delete" => "0","images" => "-", "product_category"=>$pilihan_category, "updated_at" => now(), "created_at" => now()]);
            $products_id = $myproduk->id;
            $nama_file = "product".$products_id.".".$file_product->getClientOriginalExtension();
            $file_product->move($tujuan_upload, $nama_file);
            Product::where(['id' => $products_id ])->update(['images' => $nama_file]);


        }else{
            Product::insert(["names" => $nama_product, "descriptions" => $desc_product, "prices" => $harga_product, "discounts" => $discount_product, "stocks" => "1", "has_variants" => "0", "product_status" => "1" , "status_product_delete" => "0", "images" => "-", "product_category"=>$pilihan_category, "updated_at" => now(), "created_at"=>now()]);


        }
    }
    public function addvariantproductadmin(Request $request){
        // $data = $request->all();
        $myallname = "";
        $pilihan_productvariant = $request->add_pil_produk;
        Product::where(['id' => $pilihan_productvariant ])->update(['has_variants' => 1]);
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