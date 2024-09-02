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
            <div class="profile-name">ARNORLD LORANCE</div>
            <div class="membership-info">
                <h3>GOLD MEMBERSHIP</h3>
                <p><strong>ADDRESS :</strong> No.6 SIRIMALWATTA ROAD, ANIWATTA, KANDY</p>
                <p><strong>TELEPHONE :</strong> 071 338 12 34</p>
                <p><strong>DOB :</strong> 2003/04/26</p>
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
