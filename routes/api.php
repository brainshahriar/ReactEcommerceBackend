<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\NotificationController;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/ 

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/getvisitor',[VisitorController::class, 'GetVisitorDetails']);

//ContactPage Route

Route::post('/postcontact',[ContactController::class, 'postContactDetails']);

//site Info Page

Route::get('/allsiteinfo',[SiteInfoController::class, 'AllSiteinfo']);

//all category

Route::get('/allcategory',[CategoryController::class, 'AllCategory']);

//product list

Route::get('/productlistbyremark/{remark}',[ProductListController::class, 'ProductListbyremark']);

//product list by category

Route::get('/productlistbycategory/{category}',[ProductListController::class, 'ProductListByCategory']);

//product list by subcategory

Route::get('/productlistbysubcategory/{category}/{subcategory}',[ProductListController::class, 'ProductListBySubcategory']);

//slider route

Route::get('/allslider',[SliderController::class, 'AllSlider']);

//productdetails route

Route::get('/productdetails/{id}',[ProductDetailsController::class, 'ProductDetails']);

// Notification

Route::get('/notification',[NotificationController::class, 'NotificationHistory']);

