<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the first segment is a language code
        $locale = $request->segment(1); // e.g., 'en', 'fr', etc.

        if (in_array($locale, all_languages()->pluck("icon")->toArray())) {
            App::setLocale($locale);
            Session::put('locale', $locale); // Store the locale in the session if needed
        } else {
            $locale = Session::get('locale', Config::get('app.locale'));
            App::setLocale($locale);
        }

        return $next($request);
    }
}
