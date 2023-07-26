<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\Category;
use App\Models\unit;
use App\Models\product;
use App\Models\productImage;
use App\Models\SubcategoryModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= category::all();
        $subcategories=category::all();
        $brands=brand::all();
        $units=unit ::all();
        $product=product::all();

        return view('Admin.product.create',compact('categories','subcategories','brands','units','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product= new product();
        $product->cat_id= $request->category;
        $product->subcat_id= $request->subcategory;
        $product->br_id= $request->brand;
        $product->code= $request->code;
        $product->name= $request->name;
        $product->description=$request->description;
        $product->price= $request->price;

        $product->save();


        $images=$request->file('file');

        if ($images) {

            foreach ($images as $image) {
             $imageName = time().'-'. uniqid().'.'. $image->getClientoriginalExtension();
            $productimage = new productImage();
            $image->move(public_path('product/image'), $imageName);
            $productimage->image = '/product/image/' . $imageName;
            $productimage->save();


            }
        }
        return redirect()->back();

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
