<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        //Check user if Admin/Moderator go to admin panel if not return him
        $isadminormoderator = Auth::user()->role;
        if($isadminormoderator == 1 || $isadminormoderator == 2)
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('home');
        }
    }
}
