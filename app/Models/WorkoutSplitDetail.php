<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSplitDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'workout_split_id',
        'exercise_id',
        'weight',
        'reps',
        'sets',
        'rest',
        'notes',
    ];

    public function workoutSplit()
    {
        return $this->belongsTo(WorkoutSplit::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}

