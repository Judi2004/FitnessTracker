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
        <!-- Background Image -->
     <img src="fitnessimages/fitnessmain.jpg" alt="Background Image" class="background-image">




     <header class="header">
        @include('Components.navbar')
        
            {{-- Login and Register button from jetstream --}}
            @if (Route::has('login'))
                            <nav class="flex justify-end flex-1 -mx-3">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                    <div class="authname">
                                        {{ Auth::user()->name }}
                                    </div>
                                    </a>
                                    <!-- Sign Out Button -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <button
                                            type="submit"
                                            class="sbtn rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Sign Out
                                        </button>
                                    </form>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
        </header>
        <img src="fitnessimages/logofitness.png" alt="Fitness Tracker Logo" class="logoimg">
        <main>


            <div class="cards">
                <div class="card">
                    <a href="/workoutsplit">
                        <img src="fitnessimages/f2.jpg" alt="Workout Split">
                        <div class="card-title">WORKOUT SPLIT</div>
                    </a>
                </div>
                <div class="card">
                    <img src="fitnessimages/latpulldown.jpg" alt="My Progress">
                    <div class="card-title">MY PROGRESS</div>
                </div>
                <div class="card">
                    <a href="/elibrary">
                        <img src="fitnessimages/library.png" alt="Exercise Library">
                        <div class="card-title">EXERCISE LIBRARY</div>
                    </a>
                </div>
            </div>
        </main>
        <footer>
            @include('Components.footer')
        </footer>
    </body>
</html>
