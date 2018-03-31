<?php

namespace App\Http\Middleware;

use Closure;

class CheckRequest
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
       /* if($request->ajax()){
                return response('AjaxRequest.');
        }else{
                return redirect()->to('welcome');
        }

        return $next($request);*/
    }
}
