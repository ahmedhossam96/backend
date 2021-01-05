<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
    $id = Auth::id();
    
    $product = Product::select('productname','productcateogry','product_type','color','stock','price','priceafterdiscount','descreption','discountpercentage','image',)->where('shop_id',$id)->get();
    return  $product;

    }
    public function store(Request $request)
    {
        $product= Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }



}
