# Reading List App

A simple Reading List web application built using Laravel and SQLite. It helps users organize their books and keep track of their reading progress.

## Features

- View all books in the reading list.
- Add new books with a title, author, and reading status.
- Edit existing book details.
- Delete books with a confirmation message.
- Filter books by reading status.

## Technologies Used

- PHP
- Laravel
- SQLite
- HTML
- Git and GitHub

## Reading Statuses

Each book can have one of three statuses:

- To Read
- Reading
- Finished

## Installation and Setup

### Prerequisites

Install PHP, Composer, and Git.

### Steps

1. Clone this repository:

   ```bash
   git clone https://github.com/kavyajain975/reading-list.git
   ```

2. Enter the project directory:

   ```bash
   cd reading-list
   ```

3. Install the PHP dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   ```bash
   cp .env.example .env
   ```

   On Windows, you can also copy `.env.example` to `.env` using VS Code.

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Create an empty SQLite database file if it does not already exist.

7. In `.env`, configure the database connection:

   ```env
   DB_CONNECTION=sqlite
   ```

8. Run the database migrations:

   ```bash
   php artisan migrate
   ```

9. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

10. Open `http://127.0.0.1:8000/books` in your browser.

## Author

Developed as a Laravel learning project.