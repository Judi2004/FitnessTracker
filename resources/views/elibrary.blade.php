<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Library</title>
    <link rel="stylesheet" href="mystyle.css"> <!-- Link to external CSS file -->
</head>
<body>

<div class="container">
    <h1>EXERCISE LIBRARY</h1>

    <img src="fitnessimages/library.png" alt="Background Image" class="background-image">

    <a href="index.php" class="logo-link">
            <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logo">
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
            <div><img src="path/to/bench-press.jpg" alt="Bench Press"><p>BENCH PRESS</p></div>
            <div><img src="path/to/incline-press.jpg" alt="Incline Press"><p>INCLINE PRESS</p></div>
            <div><img src="path/to/chest-fly.jpg" alt="Chest Fly"><p>CHEST FLY</p></div>
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