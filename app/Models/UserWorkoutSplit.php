<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutSplit extends Model
{
    use HasFactory;
    protected $table = 'user_workout_split';
    protected $fillable = [
        'user_id',
        'workout_split_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function workoutSplit()
    {
        return $this->belongsTo(WorkoutSplit::class);
    }
}
