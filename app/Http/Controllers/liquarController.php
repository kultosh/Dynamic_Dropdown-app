<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Liquar;

class liquarController extends Controller
{
    public function subcatfunct(){
    	$table = Category::all();
    	return view('liquarshop', compact('table'));
    }

    public function findSubcatName(Request $request){
    	$data =Subcategory::select('name','id')->where('category_id',$request->id)->get();
    	return response()->json($data);
    }

    public function findProductName(Request $request){
    	$data =Liquar::select('brand','id')->where('subcategory_id',$request->id)->take(100)->get();
    	return response()->json($data);
    }
}
