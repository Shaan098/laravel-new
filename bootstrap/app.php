<?php

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Register basic singletons first
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    \Illuminate\Contracts\Debug\ExceptionHandler::class,
    \App\Exceptions\Handler::class
);

// Bootstrap configuration
$app->make('config')->set([
    'app.name' => env('APP_NAME', 'Laravel'),
    'app.env' => env('APP_ENV', 'production'),
    'app.debug' => (bool) env('APP_DEBUG', false),
    'app.url' => env('APP_URL', 'http://localhost'),
    'app.timezone' => 'UTC',
    'app.locale' => 'en',
    'app.fallback_locale' => 'en',
    'database.default' => env('DB_CONNECTION', 'mysql'),
]);

return $app;
