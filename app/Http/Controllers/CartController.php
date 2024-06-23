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
        if(Session::get('product')){
            $mycart = Session::get('product');
            for($i = 0 ; $i < count($mycart); $i++ ){
                    $list_myitem = explode("_",$mycart[$i]);
                    $id_item = $list_myitem[0];
                    $search_produk = Product::where("id" , "=", $id_item)->get();
                    $name_produk = $search_produk[0]['names'];
                    $description_produk = $search_produk[0]['descriptions'];
                    $prices_produk = $search_produk[0]['prices'];
                    $discount_produk = $search_produk[0]['discounts'];
                    $images_produk = $search_produk[0]['images'];
                    $mycart_list[] = [
                        "name" =>$name_produk,
                        "description" => $description_produk,
                        "variant" => "-",
                        "price" => $prices_produk,
                        "discount" => $discount_produk,
                        "image" => $images_produk
                    ];
            }
        }
        $mycart_variant = [];
        if(Session::get('variantproduct')){
            $mycart_variant = Session::get('variantproduct');
            for($i = 0 ; $i < count($mycart_variant); $i++ ){
                $list_myitem = explode("_",$mycart[$i]);
                $id_item = $list_myitem[0];
                $search_produk = ProductVariant::join("product_variant","product_variant.id_product" , "=", "product.id")->where("product_variant.id", "=",$id_item)->select("product.names as nama_product","product.descriptions as description_product", "product.images as images_product", "product_variant.names as nama_variant", "product_variant.prices as harga_variant" , "product_variant.discounts as discount_variant" )->get();
                $name_produk = $search_produk[0]['nama_product'];
                $name_variant = $search_produk[0]['nama_variant'];
                $prices_produk = $search_produk[0]['harga_variant'];
                $description_produk = $search_produk[0]['description_product'];
                $discount_produk = $search_produk[0]['discount_variant'];
                $images_produk = $search_produk[0]['images_product'];
                $mycart_list[] = [
                    "name" =>$name_produk,
                    "description" => $description_produk,
                    "variant" => $name_variant,
                    "price" => $prices_produk,
                    "discount" => $discount_produk,
                    "image" => $images_produk
                ];
            }
        }
        
        return view("cart",compact("mycart_list"));
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