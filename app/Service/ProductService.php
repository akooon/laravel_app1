<?php

namespace App\Service;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function getAllProducts()
    {
        return Product::with('category')->get();
    }

    public function getProductById($id)
    {
        return Product::with('category')->find($id);
    }

    public function createProduct(Request $request)
    {
        return Product::create($request->all());
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return $product;
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return $product;
    }
}
