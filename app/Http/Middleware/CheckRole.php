<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Check if user is logged in
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Redirect based on user role
        if ($role === 'admin' && !auth()->user()->isAdmin()) {
            return redirect()->route('customer.home');
        }

        if ($role === 'customer' && !auth()->user()->isCustomer()) {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
