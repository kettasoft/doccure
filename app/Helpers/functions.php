<?php

use Illuminate\Support\Facades\Auth;

/**
 * Get the name of the current guard
 *
 * @return string|null
 */
if (!function_exists('getCurrentGuard')) {
    function getCurrentGuard()
    {
        foreach (array_keys(config('auth.guards')) as $guard) {
            if (Auth::guard($guard)->check()) {
                return $guard;
            }
        }

        return null;
    }
}
