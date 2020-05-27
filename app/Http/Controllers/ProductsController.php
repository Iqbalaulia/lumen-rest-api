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

    public function show($id){

        $products = Products::findOrFail($id);
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

    public function update(Request $request, $id){

       
        
        $products = Products::find($id);

        if(!$products){
            return response()->json(['message' => 'Product Not Found!'], 404);
        }

        $this->validate($request, [
            'nama' => 'string',
            'harga' => 'integer',
            'warna' => 'string',
            'kondisi' => 'in:baru,lama',
            'deskripsi' => 'string'
        ]);

        $data = $request->all();
        
        $products->fill($data);
        
        $products->save();

        return response()->json($products);

    }
}
