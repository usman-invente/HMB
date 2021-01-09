<?php

namespace App\Http\Middleware;

use Closure;
use App\Setting;

class CheckAppfee
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
        $setting = Setting::select('app_fee')->first();
        if($setting){
            return $next($request);
        }else{
           return redirect()->route('admin.settings');
        }

    }
}
