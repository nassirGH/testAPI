<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
     //Create a Product
     public function store(Request $request){   
      
        $request->validate([
            'Product_Name' => 'required|string',
            'Price' => 'required',
            'Tax' => 'required|numeric|min:0',
        ]);
    
        $product = new Product;
        $product->Product_Name =  $request->input('Product_Name');
        $product->Price =  $request->input('Price');
        $product->Tax =  $request->input('Tax');
        $product->Total_cost = (  $product->Price *  $product->Tax) /100;
        $product->Total_cost =  $product->Price +  $product->Total_cost ;

        $product->save();

        return response()->json
        ([
            'message' => 'Product Added', 
            'product' => $product
        ]);
    }
}
