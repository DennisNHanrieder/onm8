# Subscriber Manager

## Overview
**Pride Shark Subscriber Manager** is a full-stack **Laravel** application with **Vite** and **Tailwind CSS** integration, designed to manage a list of subscribers. 

## Why this project exists
The project was built to:
- Showcase proficiency in **Laravel** for backend logic and routing.
- Integrate **Vite** for fast asset compilation and **Tailwind CSS** for utility-first styling.
- Implement a complete CRUD workflow for managing records.

## Features
- **List Subscribers** — Displays all subscribers in a styled, responsive table.
- **Add Subscriber** — Create new subscriber records with name and email.
- **Edit Subscriber** — Update existing subscriber details.
- **Delete Subscriber** — Remove subscribers from the list.
- **Tailwind CSS Styling** — Uses utility-first design with a custom Pride-inspired gradient theme.
- **Laravel Blade Templates** — Clean separation of markup and backend logic.

> Key views and components:
> - `resources/views/subscribers/index.blade.php` — Subscriber listing table.
> - `resources/views/subscribers/create.blade.php` — Form to add a new subscriber.
> - `resources/views/subscribers/edit.blade.php` — Form to update subscriber data.
> - `resources/js/app.js` — Main JS entry with Vite setup.

## Quick start (clone & run)
```bash
# 1) Clone the repository
git clone <https://github.com/DennisNHanrieder/onm8.git>
cd onm8-main/onm8-main

# 2) Install PHP dependencies
composer install

# 3) Install JavaScript dependencies
npm install

# 4) Configure environment
cp .env.example .env
# Update database settings in .env to match your local or remote DB

# 5) Run migrations
php artisan migrate

# 6) Start development servers
php artisan serve    # Laravel backend
npm run dev          # Vite front-end build/watch
```

## Dependencies & setup
- **Core tech stack:** PHP 8+, Laravel, Vite, Tailwind CSS, MySQL/PostgreSQL (or other supported DB).
- **Backend:** Laravel for routing, controllers, models, and database migrations.
- **Frontend:** Tailwind CSS for styling, Laravel Vite Plugin for bundling.

### PHP dependencies
- Laravel Framework
- Laravel Vite Plugin

### JS dependencies
- `tailwindcss` — Utility-first CSS framework.
- `axios` — For HTTP requests if needed.

## Common scripts
- **Install PHP deps:** `composer install`
- **Install JS deps:** `npm install`
- **Dev build/watch:** `npm run dev`
- **Production build:** `npm run build`
- **Run Laravel server:** `php artisan serve`

## How to run tests
If tests are configured in Laravel:
```bash
php artisan test
```
For front-end tests, configure a JS test runner such as Vitest or Jest.

## How to contribute
1. Fork the repository and create a new branch.
2. Follow Laravel and Tailwind coding standards.
3. Document any new routes, views, or components.
4. Submit a pull request with a description of the changes.

## What powers the core functionality?
- **Laravel** — Backend framework for routing, data models, and controllers.
- **Vite** — Modern asset bundler for fast front-end builds.
- **Tailwind CSS** — Utility-first CSS framework for rapid UI development.
- **Blade Templates** — Server-rendered HTML with Laravel syntax.
