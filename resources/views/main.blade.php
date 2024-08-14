<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <div class="welcome-section">
        <!-- Background Image -->
        <img src="fitnessimages/fitnessmain.jpg" alt="Background Image" class="background-image">

        <!-- Logo Link to Home Page -->
        <a href="index.php" class="logo-link">
            <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logo">
        </a>

        <div class="overlay"></div>
        <div class="welcome-content">
            <h1>WELCOME!</h1>
            <div class="paragraph-box">
                <p>LFC Fitness tracker puts your gym experience at your fingertips. This free site allows you to seamlessly track your workouts, analyze results, and stay motivated on your fitness journey.</p>
            </div>
            <div class="buttons">
                <a href="signup.php" class="btn">Sign Up</a>
                <a href="login.php" class="btn">Login</a>
            </div>
        </div>
    </div>

    <!-- Image Slideshow -->
    <div class="carousel">
        <div class="carousel-item">
            <img src="fitnessimages/f1.jpg" alt="Gym Equipment 1">
        </div>
        <div class="carousel-item">
            <img src="fitnessimages/f2.jpg" alt="Gym Equipment 2">
        </div>
        <div class="carousel-item">
            <img src="fitnessimages/fitnessmain.jpg" alt="Gym Equipment 3">
        </div>
        <a class="carousel-prev" onclick="prevSlide()">&#10094;</a>
        <a class="carousel-next" onclick="nextSlide()">&#10095;</a>
    </div>

    <script src="script.js"></script>
</body>
</html>
</html>