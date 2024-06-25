<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionHistory;
use Session;
use DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('user')){
            $transactions = Transaction::where('id_user','=',Session::get('id_user'))->latest()->select("transaction.*",DB::raw("DATE_FORMAT(transaction.created_at, '%d %b %Y') as date_invoice"))->paginate(10);
            return view('order', compact("transactions"));
        }
        else{
            return redirect('/masuk');
        }
        
    }
    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $transactions = Transaction::where('id_user','=',Session::get('id_user'))->latest()->select("transaction.*",DB::raw("DATE_FORMAT(transaction.created_at, '%d %b %Y') as date_invoice"))->paginate(10);

      return view('invoice_list', compact('transactions'))->render();
     }
    }
    public function getInvoiceDetail(Request $request ){
        $id_transaction = $request->idtrans;
        $myproduct = TransactionHistory::leftJoin("product", "product.id","=","transaction_history.id_product")
                    ->leftJoin("product_variant","product_variant.id","=","transaction_history.id_product_variant")
                    ->Join("transaction","transaction.id",'=',"transaction_history.id_transaction")
                    ->where("id_transaction","=",$id_transaction)
                    ->select("product.names as product_name","product.images as product_image", "product.descriptions as product_description", "product.discounts as product_discounts",  "product_variant.prices as variant_prices",   "product_variant.discounts as variant_discount","product_variant.descriptions as variant_descriptions", "transaction_history.qty as buy_qty", "transaction_history.subtotal as buy_subtotal", "transaction.total_price as total_invoice",DB::raw("DATE_FORMAT(transaction.created_at, '%d %b %Y') as date_invoice") , "transaction.id as id_invoice")->get();
        return response()->json(['output' => $myproduct]);
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