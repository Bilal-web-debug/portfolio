<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background: #0f0f0f;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #1c1c1c;
            border-radius: 20px;
            padding: 40px;
            width: 80%;
            max-width: 1000px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content {
            max-width: 50%;
        }

        .content h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .content h2 {
            font-size: 1.5em;
            color: #00ffff;
            margin: 10px 0;
        }

        .content p {
            font-size: 1em;
            color: #aaa;
            margin: 20px 0;
        }

        .content .social-icons {
            margin: 20px 0;
        }

        .content .social-icons a {
            color: #00ffff;
            margin-right: 15px;
            font-size: 1.5em;
            text-decoration: none;
        }

        .content .btn {
            background: #00ffff;
            color: #1c1c1c;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .profile-pic {
            width: 250px; /* Set the width of the profile picture */
            height: 250px; /* Set the height of the profile picture */
            border-radius: 50%; /* Make it circular */
            overflow: hidden; /* Hide overflow */
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5); /* Add shadow for effect */
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image covers the container */
        }

        .navbar {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            width: 80%;
            max-width: 1000px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 300;
        }

        .navbar a:hover {
            color: #00ffff;
        }

        .navbar .logo {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a class="logo" href="#">
            Portfolio
        </a>
        <div>
            <a href="/">
                Home
            </a>
            <a href="/about">
                About
            </a>
            <a href="/projects">
                Projects
            </a>
            <a href="/contact">
                Contact
            </a>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <h1>Hello, It's Me</h1>
            <h1>Muhammad Bilal</h1>
            <h2>And I'm a <span style="color: #00ffff;">Laravel Developer</span></h2>
            <p>Skilled in building dynamic, secure, and scalable web applications using Laravel and PHP, with a focus on clean code and performance optimization.</p>
            <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <a class="btn" href="#">
                Download CV
            </a>
        </div>
        <div class="profile-pic">
            <img src="{{ asset('images/bilal.jpeg') }}" alt="Profile picture of Bilal" />
        </div>
    </div>
</body>
</html>
