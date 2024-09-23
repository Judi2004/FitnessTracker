<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mystyle.css"> <!-- Link to the external CSS file -->
    <title>Workout Split</title>
</head>
<body>
{{-- Navbar --}}
    <header class="header">
        @include('Components.navbar')
    </header>
{{-- Logo and the Backgroung Image --}}
    <img src="fitnessimages/fitnessmain.jpg" alt="Background Image" class="background-image">

    <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">

    {{-- Main Section --}}
    <main>
        <section class="workout-split-header">
            <h1>Workout Split</h1>
            <div class="buttons">
                <a href="#" class="btn">Create My Workouts</a>
                <a href="/myworkouts" class="btn">View My Workouts</a>
            </div>
        </section>
    </main>
{{-- Footer --}}
    <footer>
        @include('Components.footer')
    </footer>
</body>
</html>
