# Digital Bookstore — Full-Stack Web Application

A focused book review web application for finance, investing and personal-growth 
titles, built with PHP and MySQL as the final project for INT1059 Advanced Web 
at the Academy of Interactive Technology (AIT).

Users can browse a curated catalogue, filter by genre, search across the 
collection, leave star-rated reviews, manage a personal favourites list and 
maintain their own account.

## Live Demo

http://digitalbookstore.free.nf

## Team and My Contribution

This project was developed in pair as equal collaborators with focused responsibilities:

**Luiza Miranda Gomes ([@Lmg15186](https://github.com/Lmg15186)) — my contribution:**
- Authentication flows (registration, login, logout) with `password_hash` / 
  `password_verify` and session-based access control
- Review submission feature — form, validation and prepared-statement insertion 
  into the `reviews` table
- Favourites feature — toggle add/remove and dedicated favourites page
- Visual theme — forest-green and antique-gold palette inspired by classic 
  book bindings, card components, hero banner and responsive grid
- Project documentation — README, final report and presentation deck

**Willian Yudy Futema ([@Willian-Yudy-F](https://github.com/Willian-Yudy-F)) — partner contribution:**
- Database schema design and SQL seed data
- Book detail page and search functionality
- Account management page
- Browser testing and quality assurance

The original team repository is at: 
https://github.com/Willian-Yudy-F/advanced-web-prototype

## Technology Stack

| Layer | Technology |
|---|---|
| Server | Apache 2.4 (XAMPP) |
| Language | PHP 8.2 |
| Database | MariaDB 10 / phpMyAdmin |
| Frontend | HTML5 + CSS3 (custom, no framework) |
| Auth | PHP sessions + `password_hash` / `password_verify` |
| Security | Prepared statements (mysqli) + `htmlspecialchars` |
| Version control | Git + GitHub |

## Features

- Home page with curated random bestsellers
- Genre filtering across six categories: Finance, Investing, Business, Mindset, 
  Lifestyle, Habits
- Book detail page with cover, metadata, full description, average rating and reviews
- Star rating system (1–5 stars)
- User registration and login (sessions + hashed passwords)
- Star-rated written reviews from authenticated users
- Personal favourites list — add, remove and view
- Search across title, author and description
- Account page — update name, email, password; manage own reviews
- Sitemap page

## Database Schema

Four tables with foreign keys and a unique constraint:

- **users** — `id, name, email (unique), password (hash), created_at`
- **books** — `id, title, author, description, image, genre, created_at`
- **reviews** — `id, book_id (FK), user_id (FK), rating (1–5), comment, created_at`
- **favorites** — `id, user_id (FK), book_id (FK), created_at` with `UNIQUE(user_id, book_id)`

## Local Setup

1. Install XAMPP (Apache + MySQL/MariaDB).
2. Clone or download this repository into the XAMPP `htdocs` folder:
   - macOS: `/Applications/XAMPP/xamppfiles/htdocs/bookstore`
   - Windows: `C:\xampp\htdocs\bookstore`
3. Start Apache and MySQL from the XAMPP control panel.
4. Open http://localhost/phpmyadmin, create a database called `advanced_web` 
   (utf8mb4) and import `advanced_web.sql` (or `books.sql` + `users.sql`).
5. Copy `.env.example` to `.env` (or set environment variables) with your 
   local MySQL credentials. Defaults work with XAMPP out of the box 
   (`localhost` / `root` / no password).
6. Open http://localhost/bookstore/

## Security Notes

- Passwords are hashed with `password_hash()` (Argon2/Bcrypt) — never stored in plain text.
- All user-input queries use prepared statements via `mysqli_prepare` to prevent SQL injection.
- All dynamic output passes through `htmlspecialchars()` to prevent XSS.

## Project Documentation

- [Final Report](docs/final-report.pdf) — full project report covering architecture, schema, security and team contribution
- [Presentation](docs/presentation.pdf) — pitch deck used for the final presentation

## What I Learned

- Building a multi-page PHP application with shared components (navbar, db connection)
- Implementing session-based authentication securely with hashed passwords
- Designing relational schemas with foreign keys and unique constraints
- Splitting features cleanly with a teammate using Git workflows
- Translating a visual design language (Booktopia-inspired) into custom CSS
- Writing technical documentation (report, presentation) for an academic audience

## Acknowledgements

Big thanks to my teammate Willian for the back-end and database work, and 
for a great collaboration throughout this project.
