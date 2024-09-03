<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness Tracker</title>
    {{-- my own css --}}
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>

<header>
<div class="logo">FITNESS TRACKER</div>
            <nav>
                <ul>
                    <li><a href="/home">HOME</a></li>
                    <li><a href="/profile">MY PROFILE</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                </ul>
            </nav>
</header>

<div class="container">
    <h1>EXERCISE LIBRARY</h1>

    <img src="fitnessimages/library.png" alt="Background Image" class="background-image">

    <a href="index.php">
            <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">
        </a>

    <div class="button-container">
        <button onclick="showExercises('chest')">CHEST</button>
        <button onclick="showExercises('back')">BACK</button>
        <button onclick="showExercises('arms')">ARMS</button>
        <button onclick="showExercises('shoulders')">SHOULDERS</button>
        <button onclick="showExercises('lower_body')">LOWER BODY</button>
        <button onclick="showExercises('abs')">ABS</button>
    </div>

    <div id="chest" class="exercise-container">
        <h2>CHEST</h2>
        <div class="exercise-grid">
            <div><img src="fitnessimages/benchpress.jpg" alt="Bench Press"><p>BENCH PRESS</p></div>
            <div><img src="fitnessimages/incline.jpeg" alt="Incline Press"><p>INCLINE PRESS</p></div>
            <div><img src="fitnessimages/chestfly.jpg" alt="Chest Fly"><p>CHEST FLY</p></div>
            <div><img src="path/to/decline-press.jpg" alt="Decline Press"><p>DECLINE PRESS</p></div>
            <div><img src="path/to/cable-fly.jpg" alt="Cable Fly"><p>CABLE FLY</p></div>
            <div><img src="path/to/dumbbell-pullover.jpg" alt="Dumbbell Pullover"><p>DUMBBELL PULLOVER</p></div>
            <div><img src="path/to/cable-press.jpg" alt="Cable Press"><p>CABLE PRESS</p></div>
            <div><img src="path/to/cable-crossover.jpg" alt="Cable Crossover"><p>CABLE CROSSOVER</p></div>
            <div><img src="path/to/peck-deck-machine.jpg" alt="Peck Deck Machine"><p>PECK DECK MACHINE</p></div>
        </div>
    </div>

    <!-- Repeat similar structure for BACK, ARMS, SHOULDERS, LOWER BODY, ABS -->
</div>


<script src="scripts.js"></script> <!-- Link to external JS file -->

</body>
</html>
