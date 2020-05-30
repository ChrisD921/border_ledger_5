<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if(auth()->check()){
            if ($request->user()->is_admin == 1) {
                return $next($request);
            }elseif($request->user()->is_admin == 0){
                return redirect('/ledger')->with('redirect_msg',"Only the Admin can access the Personnel Management page!");
            }

        }else{
            return redirect('/home');
        }

        
    }
}


