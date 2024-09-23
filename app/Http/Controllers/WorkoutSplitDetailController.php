<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkoutSplit;
use App\Models\UserWorkoutSplit;
use App\Models\WorkoutSplitDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutSplitDetailController extends Controller
{
    public function myWorkouts()
    {
        // Fetch workout splits for the logged-in user along with related exercise details
        $user = Auth::user();

        // Get user's workout splits with exercises and workout details
        $userWorkoutSplits = UserWorkoutSplit::with(['workoutSplit.exercises'])
            ->where('user_id', $user->id)
            ->get();


        // Pass the data to the view
        return view('myworkouts', compact('userWorkoutSplits'));
    }

}
