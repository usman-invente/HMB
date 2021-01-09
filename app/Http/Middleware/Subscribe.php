<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class Subscribe
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
        $user = $request->user();
        if($user->end_at >= Carbon::now()){
            return $next($request);
        }
        else{
            return redirect()->route('price.plan');
        }

    }
}
