<?php

namespace App\Http\Controllers;
use App\Product;
//use owner;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('admin.search.index' );
    }

    
    public function search(Request $request){


      /*  return view('admin.search.table',[
            'products' =>Product::where('name','LIKE','%'.$request->search."%")->get()
            
            ]); */
        
          $cats = Product::where('name','LIKE','%'.$request->search."%")->get();
           
          return json($cats);
    }
}
