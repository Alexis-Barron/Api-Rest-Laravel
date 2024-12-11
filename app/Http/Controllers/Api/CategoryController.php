<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use PhpParser\Builder\Function_;

class CategoryController extends Controller
{
    public Function all()
    {
        return response()->json(Category::get());
    }
    public function index()
    {
        return response()->json(Category::paginate(100));
    }

    public function store( StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    
    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function slug(Category $category)
    {
        return response()->json($category);
    }

    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('ok');
    }
}
