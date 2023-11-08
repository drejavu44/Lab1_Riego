<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }
    
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->save();
    
        return redirect()->route('categories.index');
    }
    
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
}
?>