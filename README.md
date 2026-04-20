# Laravel Project

A fresh Laravel project with a complete directory structure and configuration files.

## Project Structure

```
laravel-new/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   ├── Services/
├── bootstrap/
│   ├── app.php
│   └── cache/
├── config/
│   ├── app.php
│   └── database.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── index.php
├── resources/
│   └── views/
├── routes/
│   ├── web.php
│   ├── api.php
│   └── console.php
├── storage/
│   └── logs/
├── tests/
│   ├── Feature/
│   └── Unit/
├── composer.json
├── .env.example
├── artisan
└── .gitignore
```

## Getting Started

1. **Clone or copy the repository**
   ```bash
   cd laravel-new
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Set up environment file**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```

Your application will be available at `http://localhost:8000`

## Key Files

- **routes/web.php** - Define your web routes
- **routes/api.php** - Define your API routes
- **app/Http/Controllers/** - Place your controllers here
- **app/Models/** - Place your Eloquent models here
- **resources/views/** - Place your Blade templates here
- **config/app.php** - Application configuration
- **config/database.php** - Database configuration

## Requirements

- PHP 8.1 or higher
- Composer

## License

MIT
