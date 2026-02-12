<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $story['title'] }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Massively CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>
    <style>
.image.fit img {
    max-height: 420px;
    object-fit: contain;
}
</style>

<body class="is-preload">

<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <a href="/" class="logo">Library</a>
    </header>

    <!-- Main -->
    <div id="main">

        <article class="post">
            <header class="major">
                <h1>{{ $story['title'] }}</h1>
            </header>

            <!-- Image -->
           <span class="image fit">
    <img 
        src="{{ asset($story['image']) }}" 
        alt="{{ $story['title'] }}"
        style="max-height: 420px; object-fit: contain;"
    >
</span>


            <!-- Story content -->
            <p style="white-space: pre-line;">
                {{ $story['content'] }}
            </p>

            <!-- BUTTONS -->
            <ul class="actions special">
                <li>
                    <a href="{{ $story['full_link'] }}" 
                       target="_blank" 
                       class="button primary large">
                        📖 Read Full Book
                    </a>
                </li>
                <li>
                    <a href="/" class="button large">
                        ← Back to Home
                    </a>
                </li>
            </ul>
        </article>

    </div>

    <!-- Footer -->
    <div id="copyright">
        <ul>
            <li>&copy; 2026</li>
            <li>Design: HTML5 UP</li>
        </ul>
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
