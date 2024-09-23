<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method to display categories in elibrary
    public function index()
    {
        // Fetch all categories from the database
        $categories = Category::all();

        // Pass categories to the view
        return view('elibrary', compact('categories'));
    }
}

