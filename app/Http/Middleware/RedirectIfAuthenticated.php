<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\ThrottleRequests as Middleware;

class ThrottleRequests extends Middleware
{
    /**
     * Resolve request signature.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function resolveRequestSignature($request)
    {
        return sha1(
            $request->method() .
            '|' . $this->getRoutePattern($request) .
            '|' . $request->ip()
        );
    }

    /**
     * Get the route pattern.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function getRoutePattern($request)
    {
        return $request->route()->pattern ?? $request->path();
    }
}
