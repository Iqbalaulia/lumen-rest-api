<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return response()->json($products);

    }

    public function create(Request $request){

        $this->validate($request, [
            'nama' => 'required|string',
            'harga' => 'required|integer',
            'warna' => 'required|string',
            'kondisi' => 'required|in:baru,lama',
            'deskripsi' => 'string'
        ]);
        
        $data = $request->all();

        $products = Products::create($data);

        return response()->json($products);

    }
}
