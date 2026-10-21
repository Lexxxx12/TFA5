# SariPOS Laravel Foundations

SariPOS is a four-page point-of-sale foundation built with Laravel 13 for IT0049 Technical Formative Assessment 5. It demonstrates routing, controllers, Blade templates, navigation, and static PHP arrays as temporary data sources.

## Required pages

| Route | Controller action | Purpose |
| --- | --- | --- |
| `/` | `PageController@home` | Landing page and directory shortcuts |
| `/about` | `PageController@about` | Project and technology overview |
| `/customers` | `CustomerController@index` | Customer directory rendered from a static PHP array |
| `/users` | `UserController@index` | User directory rendered from a static PHP array |

## Local setup

Requirements:

- PHP 8.3 or later
- Composer
- Node.js and npm

Install and run the project:

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Open `http://127.0.0.1:8000` in a browser.

## Development

Run the Laravel application and Vite development server together:

```bash
composer run dev
```

Run the automated tests and formatter:

```bash
php artisan test
vendor/bin/pint
```

## Project structure

- `routes/web.php` defines the four named web routes.
- `app/Http/Controllers` contains the page and account controllers.
- `resources/views` contains the shared layout and four Blade pages.
- `resources/css/app.css` defines the Tailwind CSS theme tokens.
- `tests/Feature/PageRenderingTest.php` verifies the required pages and sample records.

The repository includes Laravel's default migrations and database seeder files for future database-backed work. This assessment intentionally keeps the customer and user records in controller arrays.

## Render deployment

The repository includes a production `Dockerfile` and `render.yaml` Blueprint. On Render, create a Blueprint or Docker web service from this repository. The container generates an application key when one is not provided, builds the frontend assets, installs production Composer dependencies, and starts Laravel on the platform-provided port.
