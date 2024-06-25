<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductVariant;
use Session;

class HhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myproduct = Product::latest('id')->paginate(6);
        return view('index')->withProducts($myproduct);
    }
    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $products =  Product::latest('id')->paginate(6);
      return view('product_cart', compact('products'))->render();
     }
    }
    public function detail_variant(Request $request){
        $id_product = $request->id_products;
        $variants = ProductVariant::where('id_product','=',$id_product)->join("product", "product.id","=","product_variant.id_product")->where('variant_status','=','1')->select("product_variant.*","product.images")->get();
        return response()->json(['variant' => $variants]);
    }
    public function addtocart(Request $request){
        if(isset($request->array_of_products)){
            for($i = 0 ; $i< count($request->array_of_products); $i++){
                Session::push('product',$request->array_of_products[$i]);
            }
         
        }
        if(isset($request->array_of_variants)){
            for($j = 0 ; $j< count($request->array_of_variants); $j++){
                Session::push('variantproduct',$request->array_of_variants[$j]);
            }
        }
       
        return response()->json(['output' => Session::all()]);
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