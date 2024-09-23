<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mystyle.css') }}">
<title>{{ $exercise->name }} Details</title>
</head>
<body class="lbody">

    <header class="header">
        @include('Components.navbar')
    </header>

    <img src="{{ asset('storage/' . $exercise->image) }}" alt="{{ $exercise->name }}" class="background-image">
    <img src="{{ asset('fitnessimages/logofitness.png') }}" alt="Fitness Tracker Logo" class="logoimg">

    <!-- Main Section with Image and Video Player -->
    <main>
        <section class="exercise-header">
            <h1>{{ $exercise->name }}</h1>
        </section>

        <section class="steps">
            <h2>Steps to follow</h2>
            <p>{{ $exercise->description }}</p>
        </section>
    </main>
{{-- <!-- Footer Section -->
<footer>
    @include('Components.footer')
</footer> --}}
</body>
</html>
