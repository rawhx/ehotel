<?php

namespace App\Http\Middleware;

use Closure;
use Directory;
use Illuminate\Http\Request;

class ceklvl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$lvl)
    {
        if (in_array($request->user()->lvl, $lvl)) {
            return $next($request);
        }
        if (auth()->user()->lvl=='admin') {
            return redirect('/profile');
        }
        return back();
    }
}
