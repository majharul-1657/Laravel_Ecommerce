<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;
use App\Models\brand;
use App\Models\Category;
use App\Models\unit;
use App\Models\product;
use App\Models\productImage;
use App\Models\SubcategoryModel;

class homecontroller extends Controller
{
    public function index(){

        $categories= category::all();
        $subcategories=category::all();
        $brands=brand::all();
        $units=unit ::all();
        $products=product::where('status',1)->latest()->limit(10)->get();


        return view('fontend.welcome',compact('categories','subcategories','brands','units','products'));

    }


    public function view_detalis($id){

        $categories= category::all();
        $subcategories=category::all();
        $brands=brand::all();
        $units=unit ::all();
        $products=product::findOrFail($id);

        return view('fontend.pages.view_details',compact('categories','subcategories','brands','units','products'));

    }




    public function login_check(){
        return view('fontend.pages.login');
    }
}
