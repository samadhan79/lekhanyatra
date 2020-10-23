<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
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
        if (!$request->session()->exists('admin')) {
            // user value not found in session
            session(['redirect_url' => url()->current()]);
            $request->session()->flash('info', 'Your Session was expired.');
            return redirect('admin');
        }

        return $next($request);
    }
}

