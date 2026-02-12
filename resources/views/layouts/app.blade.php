<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Massively CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}">
    </noscript>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="is-preload">

<!-- ❌ Breeze navigation MUST be OUTSIDE wrapper -->
@include('layouts.navigation')

<div id="wrapper" class="fade-in">

    <!-- Header (ALWAYS PRESENT) -->
    <header id="header">
        <a href="/" class="logo">
            {{ config('app.name', 'Laravel') }}
        </a>
    </header>

    <!-- Main -->
    <div id="main">
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">

            <!-- Contact -->
            <section class="split contact">
                <section>
                    <h3>Email</h3>
                    <p>
                        <a href="mailto:example@email.com">
                            example@email.com
                        </a>
                    </p>
                </section>
            </section>

            <!-- Pagination -->
            <ul class="pagination">
                <li><span class="button disabled">Prev</span></li>
                <li><a href="#" class="page active">1</a></li>
                <li><a href="#" class="page">2</a></li>
                <li><a href="#" class="page">3</a></li>
                <li><span class="ellipsis">…</span></li>
                <li><a href="#" class="page">8</a></li>
                <li><a href="#" class="page">9</a></li>
                <li><a href="#" class="page">10</a></li>
                <li><a href="#" class="button">Next</a></li>
            </ul>

        </div>
    </footer>

</div>

<!-- Massively Scripts (ORDER MATTERS) -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
