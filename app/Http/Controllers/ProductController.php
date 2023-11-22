<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = $this->productService->getProductById($id);
        return response()->json($product);
    }

    public function store(Request $request)
    {
        $product = $this->productService->createProduct($request);
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = $this->productService->updateProduct($request, $id);
        return response()->json($product, 200);
    }

    public function delete($id)
    {
        $this->productService->deleteProduct($id);
        return response()->json(null, 204);
    }
}
