<?php

namespace App\Http\Middleware;

use Closure;
use App\UserCourse;

class CheckPremiumCourse
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
        if(UserCourse::where('user_id', $user->id)->exists()){
            return $next($request);
        }else{

            return redirect()->back();
        }

    }
}
