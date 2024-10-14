@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<style>
    #contact {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
        background-color: #000; /* Black background */
        color: #fff; /* White text */
        padding: 40px;
        text-align: center;
    }
    .contact-container {
        width: 100%;
        max-width: 600px;
    }
    .contact-container h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #fff; /* White text */
    }
    .contact-container p {
        font-size: 1rem;
        color: #ccc; /* Light grey text */
        margin-bottom: 20px;
    }
    .contact-container .contact-info p {
        color: #fff;
        margin: 10px 0;
    }
    .contact-container a {
        color: #00ffff; /* Cyan color */
        text-decoration: none;
    }
    .contact-container form {
        margin-top: 20px;
    }
    .contact-container input, .contact-container textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #555; /* Dark grey border */
        border-radius: 5px;
        background-color: #333; /* Dark background for inputs */
        color: #fff; /* White text in inputs */
    }
    .contact-container input[type="submit"] {
        background-color: #00ffff; /* Cyan button */
        border: none;
        padding: 12px 20px;
        color: #000; /* Black text for button */
        font-size: 1rem;
        cursor: pointer;
    }
    .contact-container input[type="submit"]:hover {
        background-color: #00cccc; /* Darker cyan on hover */
    }
    .contact-container ul {
        list-style: none;
        padding: 0;
        margin: 20px 0 0;
        display: flex;
        justify-content: center;
    }
    .contact-container ul li {
        margin: 0 10px;
    }
    .contact-container ul li a {
        font-size: 1.2rem;
        color: #00ffff;
    }
</style>

<section id="contact">
    <div class="contact-container">
        <h1>Get in Touch</h1>
        <p>I'd love to hear from you about potential collaborations or projects.</p>

        <div class="contact-info">
            <p>Email: <a href="mailto:muhammadbilal.3kc@gmail.com">muhammadbilal.3kc@gmail.com</a></p>
            <p>Phone: 0313-2015160</p>
            <p>Address: Karachi, Pakistan.</p>
        </div>

        <form action="{{ url('/contact-submit') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br><br>

            <input type="submit" value="Send Message">
        </form>

        <ul class="social-media">
            <li><a href="https://linkedin.com/in/yourlinkedinprofile" target="_blank">LinkedIn</a></li>
            <li><a href="https://twitter.com/yourtwitterhandle" target="_blank">Twitter</a></li>
        </ul>
    </div>
</section>
@endsection
