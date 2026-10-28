<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadSpace | My Library</title>

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

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 235px;
            background: #172554;
            color: white;
            padding: 30px 20px;
            flex-shrink: 0;
        }

        .brand {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 45px;
        }

        .brand span {
            color: #60a5fa;
        }

        .nav-label {
            color: #94a3b8;
            font-size: 11px;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .nav-link {
            display: block;
            color: #dbeafe;
            text-decoration: none;
            padding: 13px 14px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .nav-link:hover,
        .nav-link.active {
            background: #2563eb;
            color: white;
        }

        .sidebar-note {
            margin-top: 50px;
            padding: 15px;
            border-radius: 10px;
            background: #1e3a8a;
            color: #dbeafe;
            font-size: 13px;
            line-height: 1.6;
        }

        .main {
            flex: 1;
            min-width: 0;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 35px;
        }

        .topbar h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .subtitle {
            color: #64748b;
            margin: 0;
            font-size: 14px;
        }

        .primary-button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 17px;
            text-decoration: none;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
        }

        .primary-button:hover {
            background: #1d4ed8;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 14px 16px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            padding: 23px;
        }

        .stat-label {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .stat-number {
            font-size: 30px;
            font-weight: bold;
            margin: 0;
        }

        .stat-description {
            color: #94a3b8;
            font-size: 12px;
            margin-top: 9px;
        }

        .panel {
            background: white;
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 22px;
        }

        .panel-header h2 {
            font-size: 18px;
            margin: 0;
        }

        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .filter-link {
            display: inline-block;
            padding: 9px 13px;
            background: #f1f5f9;
            color: #475569;
            text-decoration: none;
            border-radius: 7px;
            font-size: 13px;
        }

        .filter-link:hover,
        .filter-link.active {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .book-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 20px 0;
            border-top: 1px solid #eef2f7;
        }

        .book-details {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: 0;
        }

        .book-icon {
            width: 48px;
            height: 58px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dbeafe;
            border-radius: 6px;
            font-size: 23px;
        }

        .book-info {
            min-width: 0;
        }

        .book-info h3 {
            font-size: 15px;
            margin: 0 0 7px;
            overflow-wrap: anywhere;
        }

        .book-info p {
            color: #64748b;
            font-size: 13px;
            margin: 0 0 9px;
        }

        .badge {
            display: inline-block;
            font-size: 11px;
            font-weight: bold;
            padding: 5px 9px;
            border-radius: 20px;
        }

        .badge-to-read {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-reading {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .badge-finished {
            background: #dcfce7;
            color: #166534;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 13px;
            flex-shrink: 0;
        }

        .edit-link {
            color: #2563eb;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        .delete-button {
            border: 1px solid #fecaca;
            background: white;
            color: #dc2626;
            padding: 8px 10px;
            border-radius: 6px;
            cursor: pointer;
        }

        .delete-button:hover {
            background: #fef2f2;
        }

        .empty-state {
            text-align: center;
            padding: 45px 15px;
            color: #64748b;
            border-top: 1px solid #eef2f7;
        }

        .empty-state h3 {
            color: #334155;
        }

        @media (max-width: 850px) {
            .sidebar {
                width: 190px;
            }

            .main {
                padding: 25px 18px;
            }

            .stats {
                gap: 12px;
            }

            .stat-card {
                padding: 17px;
            }
        }

        @media (max-width: 650px) {
            .layout {
                display: block;
            }

            .sidebar {
                width: 100%;
                padding: 18px;
            }

            .brand {
                margin-bottom: 20px;
            }

            .sidebar-note {
                display: none;
            }

            .main {
                padding: 22px 15px;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .panel {
                padding: 18px;
            }

            .book-row {
                align-items: flex-start;
                flex-direction: column;
            }

            .actions {
                padding-left: 63px;
            }
        }
    </style>
</head>

<body>
<div class="layout">

    <aside class="sidebar">
        <div class="brand">Read<span>Space.</span></div>

        <div class="nav-label">WORKSPACE</div>

        <a href="{{ route('books.index') }}"
           class="nav-link {{ empty($status) ? 'active' : '' }}">
            ▦ &nbsp; My Library
        </a>

        <a href="{{ route('books.index', ['status' => 'to-read']) }}"
           class="nav-link {{ ($status ?? '') === 'to-read' ? 'active' : '' }}">
            ◷ &nbsp; Want to Read
        </a>

        <a href="{{ route('books.index', ['status' => 'reading']) }}"
           class="nav-link {{ ($status ?? '') === 'reading' ? 'active' : '' }}">
            ◉ &nbsp; Currently Reading
        </a>

        <a href="{{ route('books.index', ['status' => 'finished']) }}"
           class="nav-link {{ ($status ?? '') === 'finished' ? 'active' : '' }}">
            ✓ &nbsp; Completed
        </a>

        <div class="sidebar-note">
            <strong>One page at a time.</strong>
            <br>
            Keep track of your reading journey and make time for a new chapter.
        </div>
    </aside>

    <main class="main">

        <div class="topbar">
            <div>
                <h1>My Library</h1>
                <p class="subtitle">Organize your books. Track your progress.</p>
            </div>

            <a href="{{ route('books.create') }}" class="primary-button">
                + Add New Book
            </a>
        </div>

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <div class="stats">
            <div class="stat-card">
                <div class="stat-label">Total Books</div>
                <p class="stat-number">{{ \App\Models\Book::count() }}</p>
                <div class="stat-description">Books in your library</div>
            </div>

            <div class="stat-card">
                <div class="stat-label">Currently Reading</div>
                <p class="stat-number">{{ \App\Models\Book::where('status', 'reading')->count() }}</p>
                <div class="stat-description">Stories in progress</div>
            </div>

            <div class="stat-card">
                <div class="stat-label">Completed</div>
                <p class="stat-number">{{ \App\Models\Book::where('status', 'finished')->count() }}</p>
                <div class="stat-description">Books you've finished</div>
            </div>
        </div>

        <section class="panel">
            <div class="panel-header">
                <h2>Reading Status</h2>
            </div>

            <div class="filters">
                <a class="filter-link {{ empty($status) ? 'active' : '' }}"
                   href="{{ route('books.index') }}">All Books</a>

                <a class="filter-link {{ ($status ?? '') === 'to-read' ? 'active' : '' }}"
                   href="{{ route('books.index', ['status' => 'to-read']) }}">Want to Read</a>

                <a class="filter-link {{ ($status ?? '') === 'reading' ? 'active' : '' }}"
                   href="{{ route('books.index', ['status' => 'reading']) }}">Reading</a>

                <a class="filter-link {{ ($status ?? '') === 'finished' ? 'active' : '' }}"
                   href="{{ route('books.index', ['status' => 'finished']) }}">Completed</a>
            </div>
        </section>

        <section class="panel">
            <div class="panel-header">
                <h2>Your Bookshelf</h2>
            </div>

            @forelse ($books as $book)
                <div class="book-row">

                    <div class="book-details">
                        <div class="book-icon">▤</div>

                        <div class="book-info">
                            <h3>{{ $book->title }}</h3>
                            <p>by {{ $book->author }}</p>

                            @if ($book->status === 'to-read')
                                <span class="badge badge-to-read">Want to Read</span>
                            @elseif ($book->status === 'reading')
                                <span class="badge badge-reading">Currently Reading</span>
                            @else
                                <span class="badge badge-finished">Completed</span>
                            @endif
                        </div>
                    </div>

                    <div class="actions">
                        <a class="edit-link"
                           href="{{ route('books.edit', $book) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book) }}"
                              method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this book?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="delete-button">
                                Delete
                            </button>
                        </form>
                    </div>

                </div>
            @empty
                <div class="empty-state">
                    <h3>Your bookshelf is empty</h3>
                    <p>Add your first book to get started.</p>

                    <a href="{{ route('books.create') }}" class="primary-button">
                        Add Your First Book
                    </a>
                </div>
            @endforelse
        </section>

    </main>
</div>
</body>
</html>