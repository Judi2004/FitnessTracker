<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Exercise;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{

    public function index()
    {
        // Fetch all categories with their exercises
        $categories = Category::with('exercises')->get();

        // Pass the categories with exercises to the view
        return view('elibrary', compact('categories'));
    }
    // Add a method for showing exercise details
    public function show($id)
    {
        // Find the exercise by its ID
        $exercise = Exercise::findOrFail($id);

        // Pass the exercise data to the view
        return view('elibrarydetails', compact('exercise'));
    }

}
