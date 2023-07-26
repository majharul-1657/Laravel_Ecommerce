<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
 use App\Http\Controllers\CatagoryController;
 use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\checkoutController;


// use Illuminate\Support\Facades\homecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('fontend.welcome');
// });



//backend route

Route::GET('/admin',[Admincontroller::class, 'index']);


Route::get('/dashbord',[Admincontroller::class, 'dashbord']);


//  Route::POST('/admin-dashbord',Admincontroller::class, 'show_dashbord');


//catagory rout

 Route::resource('/categories',CatagoryController::class);

 Route::get('/cat-status{category}',[CatagoryController::class, 'chang_status']);


 //sub-category

 Route::resource('/subcat-categories',SubcategoryController::class);

 Route::get('/subcat-status{subcategory}',[SubcategoryController::class, 'chang_status']);

 //brand-category

 Route::resource('/brands',BrandController::class);

 Route::get('/brand-status{brand}',[BrandController::class, 'chang_status']);


 //unit-category

 Route::resource('/units',UnitController::class);

 Route::get('/unit-status{unit}',[UnitController::class, 'chang_status']);

 //size-category

 Route::resource('/sizes',SizeController::class);

 Route::get('/size-status{size}',[SizeController::class, 'chang_status']);

  //product-category

  Route::resource('/products',ProductController::class);

  Route::get('/product-status{product}',[ProductController::class, 'chang_status']);

//  Route::get('/cat-edit{category}',[CatagoryController::class, 'cat_edit']);

// fontend route

 Route::get('/',[homecontroller::class, 'index']);
 Route::get('/view-details{id}',[homecontroller::class, 'view_detalis']);


 //login
 Route::get('/checkout',[checkoutController::class, 'index']);

//  Route::get('/login-check',[checkoutController::class, 'login_check']);
