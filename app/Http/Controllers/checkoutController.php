<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class checkoutController extends Controller
{
public function index(){
    $categories= category::all();

    return view('fontend.pages.checkout',compact('categories'));
}



}
