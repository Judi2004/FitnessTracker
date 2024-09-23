<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mystyle.css"> <!-- Link to the external CSS file -->
    <title>About Us</title>
</head>
<body>

    <header class="header">
        @include('Components.navbar')
    </header>

    <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">


    <div class="container">
        <h2>About Us</h2>
        <p class="ap">Our fitness tracking system is designed to empower individuals to reach their health and fitness goals with precision. We provide real-time data, personalized workout plans, and progress tracking to help you stay motivated and on track. Whether you're a beginner or a seasoned athlete, our platform is tailored to meet your needs, offering insights and support every step of the way. Join our community and start your journey to a healthier you.</p>

        <div class="image-row">
            <img src="fitnessimages/chestfly.jpg" alt="Image 1">
            <img src="fitnessimages/incline.jpeg" alt="Image 2">
            <img src="fitnessimages/aboutimg.jpg" alt="Image 3">
        </div>
    </div>

    <footer>
        @include('Components.footer')
    </footer>

</body>
</html>
