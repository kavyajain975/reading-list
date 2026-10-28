
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book | ReadSpace</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1e293b;
        }

        .container {
            max-width: 650px;
            margin: 50px auto;
            padding: 20px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 22px;
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
        }

        .card {
            background: white;
            padding: 35px;
            border: 1px solid #e5eaf2;
            border-radius: 14px;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.04);
        }

        h1 {
            font-size: 28px;
            margin: 0 0 10px;
        }

        .subtitle {
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 9px;
        }

        input,
        select {
            display: block;
            width: 100%;
            min-height: 46px;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            background-color: white;
            color: #1e293b;
        }

        select {
            cursor: pointer;
            appearance: auto;
            -webkit-appearance: menulist;
        }

        select option {
            background-color: white;
            color: #1e293b;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px #dbeafe;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 7px;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .button {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
        }

        .primary-button {
            background: #2563eb;
            color: white;
            border: none;
        }

        .primary-button:hover {
            background: #1d4ed8;
        }

        .secondary-button {
            background: #f1f5f9;
            color: #334155;
            border: 1px solid #e2e8f0;
        }

        @media (max-width: 500px) {
            .container {
                margin: 20px auto;
                padding: 15px;
            }

            .card {
                padding: 24px;
            }

            .buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <a class="back-link" href="{{ route('books.index') }}">
            &larr; Back to My Library
        </a>

        <div class="card">
            <h1>Add a New Book</h1>

            <p class="subtitle">
                Add a book to your library and track your reading progress.
            </p>

            <form action="{{ route('books.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Book Title</label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter the book title"
                        required
                    >

                    @error('title')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="author">Author</label>

                    <input
                        type="text"
                        id="author"
                        name="author"
                        value="{{ old('author') }}"
                        placeholder="Enter the author's name"
                        required
                    >

                    @error('author')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Reading Status</label>

                    <select id="status" name="status" required>
                        <option value="to-read"
                            {{ old('status', 'to-read') === 'to-read' ? 'selected' : '' }}>
                            Want to Read
                        </option>

                        <option value="reading"
                            {{ old('status') === 'reading' ? 'selected' : '' }}>
                            Currently Reading
                        </option>

                        <option value="finished"
                            {{ old('status') === 'finished' ? 'selected' : '' }}>
                            Completed
                        </option>
                    </select>

                    @error('status')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="buttons">
                    <button class="button primary-button" type="submit">
                        + Add Book
                    </button>

                    <a class="button secondary-button"
                       href="{{ route('books.index') }}">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
