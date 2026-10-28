<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
</head>
<body>
    <h1>Add a Book</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Book Title:</label>
            <input type="text" id="title" name="title"
                   value="{{ old('title') }}" required>
        </div>

        <br>

        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"
                   value="{{ old('author') }}" required>
        </div>

        <br>

        <div>
            <label for="status">Reading Status:</label>
            <select id="status" name="status" required>
                <option value="to-read">To Read</option>
                <option value="reading">Reading</option>
                <option value="finished">Finished</option>
            </select>
        </div>

        <br>

        <button type="submit">Add Book</button>
    </form>

    <br>

    <a href="{{ route('books.index') }}">Back to Reading List</a>
</body>
</html>