<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Http\Request;
use Session;
session_start();

class Admincontroller extends Controller
{
public function index(){
    return view('Admin.adminlogin');
}

public function dashbord(){
    return view('Admin.dashbord');
}

// public function show_dashbord(Request $request){
// $admin_email=$request->email;
// $admin_password=md5($request->password);
// $result=Admin::Where('admin_email',$admin_email)->Where('admin_password',$admin_password)->first();
// if($result){

//     session::put('admin_id',$result->admin_id);
//     session::put('admin_name',$result->admin_name);
//     return Redirect::to('/dashbord');

// }else{

//     session::put('mesage','email or password invalid');
//     return Redirect::to('/admin');

// }

//}
  


}
