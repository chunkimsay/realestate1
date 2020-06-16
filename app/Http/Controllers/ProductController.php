<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'location' => 'required',
            'list_type' => 'required',
        ]);
        Product::create($request->all());

        // return redirect()-route('pr')
    }
    public function show(Product $product){
        return view()
    }
}