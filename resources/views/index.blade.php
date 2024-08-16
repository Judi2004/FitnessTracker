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




        <header>
            <div class="logo">FITNESS TRACKER</div>
            <nav>
                <ul>
                    <li><a href="/home">HOME</a></li>
                    <li><a href="/profile">MY PROFILE</a></li>
                    <li><a href="/about">ABOUT US</a></li>
                </ul>
            </nav>
            {{-- Login and Register button from jetstream --}}
            @if (Route::has('login'))
                            <nav class="flex justify-end flex-1 -mx-3">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
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
                    <img src="fitnessimages/f2.jpg" alt="Workout Split">
                    <div class="card-title">WORKOUT SPLIT</div>
                </div>
                <div class="card">
                    <img src="fitnessimages/f2.jpg" alt="My Progress">
                    <div class="card-title">MY PROGRESS</div>
                </div>
                <div class="card">
                    <img src="fitnessimages/f2.jpg" alt="Exercise Library">
                    <a href="/elibrary"><div class="card-title">EXERCISE LIBRARY</div></a>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-container">
                <div class="footer-section about-us">
                    <h3>ABOUT US</h3>
                    <p>We're here to empower your fitness journey. Join our supportive community and track your progress every step of the way.</p>
                </div>
                <div class="footer-section logo">
                    <h3>FITNESS TRACKER</h3>
                    <div class="social-icons">
                        <a href="#"><img src="fitnessimages/facebook.png" alt="Facebook"></a>
                        <a href="#"><img src="fitnessimages/in.jpg" alt="Instagram"></a>
                        <a href="#"><img src="fitnessimages/twitter.png" alt="X (Twitter)"></a>
                    </div>
                </div>
                <div class="footer-section contact-us">
                    <h3>CONTACT US</h3>
                    <p><img src="fitnessimages/phone.png" alt="Phone"> +94 77 411 12 34</p>
                    <p><img src="fitnessimages/mail1.png" alt="Email"> lfc888@gmail.com</p>
                </div>
            </div>
        </footer>
    </body>
</html>
