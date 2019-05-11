<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCat;
use App\Product;
use App\Books;

class TestController extends Controller
{
   	public function prodfunct(){
    	$prod = ProductCat::all();
    	return view('productlist', compact('prod'));
    }

    public function findProductName(Request $request){
    	$data =Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
    	return response()->json($data);
    }

    public function findPrice(Request $request){
    	$p =Product::select('price')->where('id',$request->id)->first();
    	return response()->json($p);
    }

    public function findAuthor(Request $request){
    	$ath =Books::select('cover')->where('author_id',$request->id)->first();
    	return response()->json($ath);
    }
}
