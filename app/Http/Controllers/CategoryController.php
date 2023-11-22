<?php

namespace App\Http\Controllers;

use App\Service\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCategories();
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return response()->json($category);
    }

    public function store(Request $request)
    {
        $category = $this->categoryService->createCategory($request);
        return response()->json($category, 201);
    }

    public function update(Request $request, $id)
    {
        $category = $this->categoryService->updateCategory($request, $id);
        return response()->json($category, 200);
    }

    public function delete($id)
    {
        $this->categoryService->deleteCategory($id);
        return response()->json(null, 204);
    }
}
