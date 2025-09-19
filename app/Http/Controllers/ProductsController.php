<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function ProductsPage(){
        return view('admin.products');
    }

    public function StoreProducts(Request $request){
        $data = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|string|max:255',
            'product_price' => 'required|integer|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        $path = $request->file('product_image')->store('products', 'public');

        $data['product_image'] = $path;

        Products::create($data);

        return redirect()->route('admin.productsPage')->with('success', 'Product added successfully');
    }
}
