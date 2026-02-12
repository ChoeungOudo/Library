<!DOCTYPE html>
<html>
<head>
    <title>Book Detail</title>
</head>
<body>

@if($book)
    <h1>{{ $book['title'] }}</h1>

<p><strong>Author:</strong> {{ $book['author'] }}</p>

<p>{{ $book['description'] }}</p>

<a href="/">← Back to Home</a>

@endif

<a href="/">← Back to Home</a>

</body>
</html>
