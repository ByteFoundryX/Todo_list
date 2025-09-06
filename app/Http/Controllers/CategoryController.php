<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


         

    public function index()
{
    $categories = Category::all();
    return view('Categories.index', compact('categories'));
}

public function create()
{
    return view('Categories.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|min:5'
    ]);

    Category::create([
        'title' => $request->title
    ]);

    return redirect()->route('categories.index'); 
}

public function edit(Category $category)
{
    return view('Categories.edit', compact('category'));
}

public function update(Request $request, Category $category)
{
    $request->validate([
        'title' => 'required|min:5'
    ]);

    $category->update([
        'title' => $request->title
    ]);

    return redirect()->route('categories.index'); 
}



}
