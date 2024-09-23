<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSplit extends Model
{
    use HasFactory;

    protected $fillable = ['routine_name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_workout_split');
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'workout_split_details', 'workout_split_id', 'exercise_id')
            ->withPivot('weight', 'reps', 'sets', 'rest', 'notes');
    }
}

