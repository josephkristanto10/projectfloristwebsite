<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Superadmin;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionHistory;
use App\Models\ProductVariant;


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
            return view('admin.product');
         }else{
             return view('admin.login');
         }
   
    }
    public function getlistproduk(){
        
        if(Session::has('id_superadmin')){
            $data = Product::latest();
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
        $products = Product::where("id",'=',$id_product)->get();
        foreach($myproduct as $mp){
           
            $hasil .= '<tr><td>'.$mp->gambar_produk.'</td>'.'<td>'.$mp->descriptions.'</td>'.'<td>'.$mp->discounts.'</td>'.'<td>'.$mp->prices.'</td></tr>';
        }
        return response()->json(['output' => $hasil, "output_proudct"=>$products]);
    }
    public function editproductadmin(Request $request){
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
            Product::where(['id' => $id_product ])->update(['names' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product, "descriptions"=>$desc_produk, "images" => $nama_file]);

        }else{
            Product::where(['id' => $id_product ])->update(['names' => $nama_product,"prices"=>$harga_product, "discounts" => $discount_product, "descriptions"=>$desc_produk]);

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
            return view('admin.variant_product');
         }else{
             return view('admin.login');
         }
    }
    public function getlistvariant(){
        
        if(Session::has('id_superadmin')){
            $data = ProductVariant::join("product","product.id",'=','product_variant.id_product')->select("product_variant.*","product.names", "product.images")->latest();
            // $mydatalast = $data->created_at->format('d M Y');
             return DataTables::of($data)->make(true);
         }else{
             return view('admin.login');
         }
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