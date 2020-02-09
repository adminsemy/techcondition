<?php

namespace App\Http\Middleware;

use Gate;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * 
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function boot()
    {
        $this->registerPolicies();

        Gate::define(
            'read-only', function ($user) {
                return $user->isReadOnly();
            }
        );

    }
}
