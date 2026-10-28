<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reading List</title>
    <p>Filter by status:</p>

<a href="{{ route('books.index') }}">All Books</a> |

<a href="{{ route('books.index', ['status' => 'to-read']) }}">To Read</a> |

<a href="{{ route('books.index', ['status' => 'reading']) }}">Reading</a> |

<a href="{{ route('books.index', ['status' => 'finished']) }}">Finished</a>

<hr>
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
                <a href="{{ route('books.edit', $book) }}">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST"
      onsubmit="return confirm('Are you sure you want to delete this book?');">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
            </div>
            <hr>
        @endforeach
    @endif
</body>
</html>