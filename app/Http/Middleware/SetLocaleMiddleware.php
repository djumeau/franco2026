<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the user has not manually clicked a language switcher yet, use the new default
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            // This will now dynamically read 'fr' from your .env file
            App::setLocale(config('app.locale', 'fr')); 
        }

        return $next($request);
    }
}
