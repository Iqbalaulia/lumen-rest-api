<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function create(Request $request){
        
        $data = $request->all();

        $products = Products::create($data);

        return response()->json($products);

    }
}
