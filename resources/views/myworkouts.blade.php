<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mystyle.css">
    <title>My Workouts</title>
</head>
<body>

    <header class="header">
        @include('Components.navbar')
    </header>

    <img src="fitnessimages/fitnessmain.jpg" alt="Background Image" class="background-image">
    <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">

    <main>
        <section class="workout-header">
            <h1>My Workouts</h1>
        </section>

        <section class="workout-routine">
            @if ($userWorkoutSplits->isEmpty())
                <p>No workout routines found.</p>
            @else
            @foreach($userWorkoutSplits as $userWorkoutSplit)
    <div class="routine">
        <h2>{{ $userWorkoutSplit->workoutSplit->routine_name }}</h2>
        <table>
            <thead>
                <tr>
                    <th>Exercise</th>
                    <th>Weight</th>
                    <th>Reps</th>
                    <th>Sets</th>
                    <th>Rest</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userWorkoutSplit->workoutSplit->exercises as $exercise)
                    <tr>
                        <td>{{ $exercise->name }}</td>
                        <td>{{ $exercise->pivot->weight }} kg</td>
                        <td>{{ $exercise->pivot->reps }}</td>
                        <td>{{ $exercise->pivot->sets }}</td>
                        <td>{{ $exercise->pivot->rest }} seconds</td>
                        <td>{{ $exercise->pivot->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endforeach
            @endif
        </section>
    </main>

    <footer>
        @include('Components.footer')
    </footer>

</body>
</html>
