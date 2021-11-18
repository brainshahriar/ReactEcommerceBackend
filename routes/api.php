<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;



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
