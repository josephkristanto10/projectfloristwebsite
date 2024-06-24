<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\ProductVariant;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mycart_list = [];
        $mycart = [];
        $hasil = 0;
        $jumlahitems = 0;
        if(Session::get('product')){
            $mycarts = Session::get('product');
            foreach($mycarts as $i => $mycart){
                    $list_myitem = explode("_",$mycarts[$i]);
                    $id_item = $list_myitem[0];
                    $qty_item = $list_myitem[1];
                    $search_produk = Product::where("id" , "=", $id_item)->get();
                    $name_produk = $search_produk[0]['names'];
                    $description_produk = $search_produk[0]['descriptions'];
                    $prices_produk = $search_produk[0]['prices'];
                    $discount_produk = $search_produk[0]['discounts'];
                    $images_produk = $search_produk[0]['images'];
                    $mycart_list[] = [
                        "index"=>$i,
                        "category"=>"p",
                        "name" =>$name_produk,
                        "description" => $description_produk,
                        "variant" => "-",
                        "price" => $prices_produk,
                        "discount" => $discount_produk,
                        "image" => $images_produk,
                        "qty" => $qty_item
                    ];
                    $jumlahitems += $qty_item;
                    $hasil += $qty_item * ($prices_produk-(($prices_produk*$discount_produk)/100));
            }
        }
        $mycart_variants = [];
        if(Session::get('variantproduct')){
            $mycart_variants = Session::get('variantproduct');
            foreach($mycart_variants as $i => $mycart_variant){
                $list_myitem = explode("_",$mycart_variants[$i]);
                $id_item = $list_myitem[0];
                $qty_items = $list_myitem[1];
                $search_produk = ProductVariant::join("product","product_variant.id_product" , "=", "product.id")->where("product_variant.id", "=",$id_item)->select("product.names as nama_product","product.descriptions as description_product", "product.images as images_product", "product_variant.descriptions as nama_variant", "product_variant.prices as harga_variant" , "product_variant.discounts as discount_variant" )->get();
                $name_produk = $search_produk[0]['nama_product'];
                $name_variant = $search_produk[0]['nama_variant'];
                $prices_produk = $search_produk[0]['harga_variant'];
                $description_produk = $search_produk[0]['description_product'];
                $discount_produk = $search_produk[0]['discount_variant'];
                $images_produk = $search_produk[0]['images_product'];
                $mycart_list[] = [
                    "index"=>$i,
                    "category"=>"v",
                    "name" =>$name_produk,
                    "description" => $description_produk,
                    "variant" => $name_variant,
                    "price" => $prices_produk,
                    "discount" => $discount_produk,
                    "image" => $images_produk,
                    "qty" => $qty_items
                ];
                $jumlahitems += $qty_items;
                $hasil += $qty_items * ($prices_produk-(($prices_produk*$discount_produk)/100));
            }
        }
        // $mycart_list = json_encode($mycart_list);
        
        return view("cart",compact("mycart_list","hasil", "jumlahitems"));
    }
    public function deletecart(Request $request){
  
        $category_delete = $request->category_id;
        $index_delete = $request->index_id;

        if($category_delete == "p"){
            $products[] =  Session::get('product');
            unset($products[$index_delete]);
            session()->put('product', $products);
        }
        else{
            // Second argument is a default value
            $variant_products[] =  Session::get('variantproduct');
            unset($variant_products[$index_delete]);
            session()->put('variantproduct', $variant_products);
        }  
        return response()->json(['status_delete' => "ok"]);
     
    }
    public function listcart(){
        
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