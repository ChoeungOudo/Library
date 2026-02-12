<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Massively Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}"></noscript>
</head>
<body class="is-preload">

<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>Massively<br>Website</h1>
        <p>
            A modern responsive website built with Laravel.<br>
            Using Massively template from HTML5 UP.
        </p>
        <ul class="actions">
            <li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="/" class="logo">Massively</a>
    </header>

    <!-- Navigation -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

    <!-- Featured Section -->
    <article class="post featured">
        <header class="major">
            <h2>Online Library System</h2>
            <p>
                This website is developed using <strong>Laravel Framework</strong>.
                It allows users to register, login, and access digital library content.
            </p>
        </header>
    </article>

    <!-- Sections -->
    <section class="posts">

        <article>
            <h2>User Authentication</h2>
            <p>
                Secure login and registration system using Laravel Breeze.
            </p>
        </article>

        <article>
            <h2>Book Management</h2>
            <p>
                View available books and manage library resources online.
            </p>
        </article>

        <article>
            <h2>Responsive Design</h2>
            <p>
                Mobile-friendly interface using HTML5, CSS3, and JavaScript.
            </p>
        </article>

        <article>
            <h2>Laravel MVC</h2>
            <p>
                Built with Laravel MVC architecture for clean and maintainable code.
            </p>
        </article>

    </section>

</div>


<!-- JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
