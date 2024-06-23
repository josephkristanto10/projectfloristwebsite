<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Hash;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
   
    }
    public function checklogin(Request $request){
        $myemail = $request->myemail;
        $mypwd = $request->mypwd;
        $myhashpassword = bcrypt("mypwd");
        $myvisitor = Visitor::where("username","=",$myemail)->get();
        if($myvisitor->count() > 0){
            if(Hash::check($mypwd, $myvisitor[0]->password)) {
                Session::push('id_user',$myvisitor[0]->id);
                Session::push('user',$myvisitor[0]->username);
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
    public function logout(){
        Session::forget("user");
        Session::forget("id_user");
       return "ok";
    }
    public function register(Request $request){
        $myemail = $request->myemail;
        $mypwd = $request->mypwd;
        $mwa = $request->mywa;
        $myaddress = $request->myalamat;
        $myname = $request->mynama;
        $status_register = "terpakai";

       
      
        
        $calonvisitor = Visitor::where("username","=",$myemail)->get();
        if($calonvisitor->count() == 0){
            $status_register = "ok";
            $encrypted_password = bcrypt($mypwd);
            Visitor::insert(["nama" => $myname, "username" => $myemail, "password" => $encrypted_password, "address" => $myaddress, "whatsapp_number" => $mwa]);
        }
        if($myemail == "" || $mypwd == ""|| $mwa == ""|| $myaddress == ""|| $myname == ""){
            $status_register = "datakosong";
        }
        
        return response()->json(['status_register' => $status_register]);
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