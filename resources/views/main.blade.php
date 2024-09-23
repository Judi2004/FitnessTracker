<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body class="mbody">

    <!-- Background Image -->
    <img src="fitnessimages/fitnessmain.jpg" alt="Background Image" class="background-image">

    <!-- Logo Link to Home Page -->



<header>
<div class="logo">FITNESS TRACKER</div>

</header>
<img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">


    <div class="welcome-section">

        <div class="overlay"></div>
        <div class="welcome-content">
            <h1>WELCOME!</h1>
            <div class="paragraph-box">
                <p>LFC Fitness tracker puts your gym experience at your fingertips. This free site allows you to seamlessly track your workouts, analyze results, and stay motivated on your fitness journey.</p>
            </div>

            <div class="buttons">
                {{-- Login and Register button from jetstream --}}
@if (Route::has('login'))
<nav class="flex justify-end flex-1 -mx-3 ">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
        >
        <div class="authname">
            Welcome {{ Auth::user()->name }}
        </div>
        </a>
        <!-- Sign Out Button -->
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <button
                type="submit"
                class="btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Sign Out
            </button>
        </form>
    @else
        <a
            href="{{ route('login') }}"
            class="btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="btn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Sign Up
            </a>
        @endif
    @endauth
</nav>
@endif
                {{-- <a href="/signup" class="btn">Sign Up</a>
                <a href="login" class="btn">Login</a> --}}
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
