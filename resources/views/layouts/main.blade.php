<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <style>

body {
            margin: 0;
            font-family:  sans-serif;
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
            position: relative;
            width: 250px;
            height: 250px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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

        body {
    margin: 0;
    font-family:  sans-serif;
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
    position: relative;
    width: 250px;
    height: 250px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
}
.profile-pic img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
    <nav>
        <div class="navbar">
   <a class="logo" href="#">
    Portfolio.
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
    </nav>
    
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
