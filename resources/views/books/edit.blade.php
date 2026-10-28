<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Book Title:</label>
            <input type="text" id="title" name="title"
                   value="{{ old('title', $book->title) }}" required>
        </div>

        <br>

        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"
                   value="{{ old('author', $book->author) }}" required>
        </div>

        <br>

        <div>
            <label for="status">Reading Status:</label>
            <select id="status" name="status" required>
                <option value="to-read" {{ old('status', $book->status) == 'to-read' ? 'selected' : '' }}>To Read</option>
                <option value="reading" {{ old('status', $book->status) == 'reading' ? 'selected' : '' }}>Reading</option>
                <option value="finished" {{ old('status', $book->status) == 'finished' ? 'selected' : '' }}>Finished</option>
            </select>
        </div>

        <br>

        <button type="submit">Update Book</button>
    </form>

    <br>

    <a href="{{ route('books.index') }}">Back to Reading List</a>
</body>
</html>