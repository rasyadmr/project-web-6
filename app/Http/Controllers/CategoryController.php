<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view("category.list", [
            "title" => "All Categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category) {
        return view('category.detail', [
            "title" => "Item by Category: $category->name",
            "items" => $category->item->load('category', 'user')
        ]);
    }
}
