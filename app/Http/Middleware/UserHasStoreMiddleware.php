<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserHasStoreMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $quantityStores = auth()->user()->store()->count() ?? 0;

        if ($quantityStores > 1) {
            flash("Você já possui {$quantityStores} loja(s) cadastrada.")->warning();
            return redirect()->back();
        }

        return $next($request);
    }
}
