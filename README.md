# Digital Bookstore — Full-Stack Web Application

A fully functional online bookstore built with PHP and MySQL, developed as 
a 2-person academic project at the Academy of Interactive Technology (AIT). 
Users can browse books, leave reviews and ratings, manage favourites and 
create personal accounts.

## Live Demo

http://digitalbookstore.free.nf

## Team and My Contribution

This project was built collaboratively as a team of two:

- **Front-end and UI implementation** — Luiza Miranda Gomes ([@Lmg15186](https://github.com/Lmg15186))
- **Back-end and database design** — Willian Yudy F ([@Willian-Yudy-F](https://github.com/Willian-Yudy-F))

I was responsible for the entire front-end layer: PHP templating, HTML 
structure, CSS styling, page flows (home, book detail, account, favourites, 
search) and integrating the templates with the back-end queries and 
authentication logic.

The original team repository is available at: 
https://github.com/Willian-Yudy-F/bookstore

## Technologies

- PHP 8.2
- MySQL
- HTML5 / CSS3
- XAMPP (local development)
- InfinityFree (production hosting)

## Features

- Home page with curated random book listings
- Category filtering by genre (Finance, Investing, Business, Mindset, Lifestyle, Habits)
- Book detail page with title, description, cover and metadata
- Star rating system (1–5 stars)
- User reviews — submit and read reviews per book
- User registration and login with session-based authentication
- Personal favourites list — add, remove and manage saved books
- Search functionality across the catalogue
- Account page — profile updates and review management

## Project Structure

| File | Purpose |
|---|---|
| `index.php` | Home page |
| `book.php` | Book detail, reviews and rating |
| `login.php` / `register.php` | User authentication |
| `account.php` | User account management |
| `favorites.php` / `toggle_favorite.php` | Favourites list and toggling |
| `search.php` | Search results |
| `navbar.php` | Shared navigation component |
| `db.php` | Database connection (credentials via environment variables) |
| `style.css` | Stylesheet |
| `advanced_web.sql` | Database schema and seed data |

## Local Setup

1. Install XAMPP (Apache + MySQL).
2. Clone this repository into the XAMPP `htdocs` folder:
   - macOS: `/Applications/XAMPP/xamppfiles/htdocs/bookstore`
   - Windows: `C:\xampp\htdocs\bookstore`
3. Start Apache and MySQL from the XAMPP control panel.
4. Open http://localhost/phpmyadmin, create a database called `advanced_web` 
   and import `advanced_web.sql`.
5. Copy `.env.example` to `.env` (or set environment variables) with your 
   local MySQL credentials. Defaults work with XAMPP out of the box 
   (`localhost` / `root` / no password).
6. Open http://localhost/bookstore/index.php

## What I Learned

- Building a multi-page PHP application with shared components (navbar, db connection)
- Working with MySQL: schema design, joins and prepared statements
- Implementing session-based authentication (login, register, logout)
- Splitting front-end and back-end responsibilities cleanly with a teammate
- Using Git for collaborative development with merge workflows
- Deploying a PHP/MySQL stack to a free hosting environment (InfinityFree)

## Acknowledgements

Big thanks to my teammate Willian for the back-end work and for a great 
collaboration throughout this project.
