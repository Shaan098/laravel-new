<?php

namespace App\Http\Middleware;

use Illuminate\Session\Middleware\AuthenticateSession as Middleware;

class AuthenticateSession extends Middleware
{
    /**
     * The URIs that should be excluded from session based authentication.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
