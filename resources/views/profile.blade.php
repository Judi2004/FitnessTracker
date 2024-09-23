<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
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
    <main class="profile">
        <div class="profile-banner">
            {{-- <div class="profile-title">MY PROFILE</div> --}}
        </div>
        <div class="profile-content">
            <div class="profile-pic">
                <img src="fitnessimages/profileicon.png" alt="Profile Picture">
                <div class="camera-icon">
                    <img src="fitnessimages/cameraicon.jpg" alt="Camera Icon">
                </div>
            </div>
            <div class="profile-name">
                <h2>{{ Auth::check()? Auth:: user()->name :'Guest'}}</h2>
            </div>
            <div class="membership-info">
                <p><strong>E-MAIL :</strong> {{ Auth::check()? Auth:: user()->email :'xxxx@gmail.com'}}</p>
                <p><strong>ADDRESS :</strong> {{ Auth::check()? Auth:: user()->address :'-'}}</p>
                <p><strong>TELEPHONE :</strong> {{ Auth::check()? Auth:: user()->phone :'+94 000 000 000'}}</p>
                <p><strong>DOB :</strong> {{ Auth::check()? Auth:: user()->dob :'xx/xx/xxxx'}}</p>
            </div>
        </div>
    </main>
    <footer>
        @include('Components.footer')
    </footer>
</body>
</html>
