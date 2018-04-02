<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Supplier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( Auth::check() && ( Auth::user()->isAdmin() || Auth::user()->user_type == 'Retailer' || Auth::user()->isCompanyRegistered() ) )
        {
            return $next($request);
        }

        return redirect('Suppliers/create');
    }
}
