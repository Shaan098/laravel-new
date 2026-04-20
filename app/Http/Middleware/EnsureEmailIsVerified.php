<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\EnsureEmailIsVerified as Middleware;

class EnsureEmailIsVerified extends Middleware
{
    /**
     * Redirect path for unauthenticated users.
     *
     * @var string
     */
    protected $redirectTo = '/login';
}
