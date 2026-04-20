<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RequirePassword as Middleware;

class RequirePassword extends Middleware
{
    /**
     * Redirect path for unauthenticated users.
     *
     * @var string
     */
    protected $redirectTo = '/login';
}
