<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable=['id','cat_id','subcat_id','br_id','code_id','name','description','price','image','status'];

    public function category(){
       return $this->belongsTo(category::class,'cat_id');
    }


    public function SubcategoryModel(){
        return $this->belongsTo(SubcategoryModel::class,'subcat_id');
     }

     public function Brand(){
        return $this->belongsTo(Brand::class,'br_id');
     }

     public function unit(){
        return $this->belongsTo(unit::class,'unit_id');
     }

     public static function catProductCount($cat_id){
        $catCount=product::where('cat_id',$cat_id)->where('status',1)->count();
        return $catCount;
     }
     public static function subcatProductCount($subcat_id){
        $subcatCount=product::where('subcat_id',$subcat_id)->where('ststus',1)->count();
       return $subcatCount;
    }

    public static function brandProductCount($br_id){
        $brandCount=product::where('br_id',$br_id)->where('status',1)->count();
        return $brandCount;
    }


}
