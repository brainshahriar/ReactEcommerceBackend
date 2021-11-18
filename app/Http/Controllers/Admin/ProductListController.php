<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;

class ProductListController extends Controller
{
    public function ProductListbyremark(Request $request){
        $remark = $request->remark;
        $productlist=ProductList::where('remark',$remark)->get();
        return $productlist;
    }
    public function ProductListByCategory(Request $request){
        $category=$request->category;
        $productlist=ProductList::where('category',$category)->get();
        return $productlist;
    }
    public function ProductListBySubcategory(Request $request){
        $category=$request->category;
        $subcategory=$request->subcategory;
        $productlist=ProductList::where('category',$category)->where('subcategory',$subcategory)->get();
        return $productlist;
    }
}
