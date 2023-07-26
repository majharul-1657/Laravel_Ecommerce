<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;



class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= category::all();
        return view('admin.catagory.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category();
        $category->id= $request->category;
        $category->name= $request->name;
        $category->description=$request->description;

        $category->image= $request->image->store('category');

        if($request->hasFile('image')){
            $image=$request->file('image');
            $imageName = time().'-'. uniqid().'.'. $image->getClientoriginalExtension();
            $image->move(public_path('uploaded/image'), $imageName);
            $category->image = '/uploaded/image/' . $imageName;


        }

        $category->save();
        return redirect()->back()->with('message','category create successfully');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function chang_status(category $category)
    {
        if($category->status==1){
            $category->update(['status'=>0]);
        }else{
            $category->update(['status'=>1]);
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {

        return view('Admin.catagory.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
     {
        $update=$category->update([
            'name'=>$request->name,
            'discription'=>$request->discription,
            'image'=>$request->file('image')->store('category'),
        ]);

           if($update)
             return redirect('/categories');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
    $delete=$category->delete();

    if($delete){
        return redirect()->back();
    }

    }
}
