<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reading List</title>
</head>
<body>
    <h1>My Reading List</h1>
    <a href="{{ route('books.create') }}">Add a New Book</a>
    @if (session('success'))
    <p>{{ session('success') }}</p>
@endif

    @if ($books->isEmpty())
        <p>No books added yet.</p>
    @else
        @foreach ($books as $book)
            <div>
                <h3>{{ $book->title }}</h3>
                <p>Author: {{ $book->author }}</p>
                <p>Status: {{ $book->status }}</p>
            </div>
            <hr>
        @endforeach
    @endif
</body>
</html>