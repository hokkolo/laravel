<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CustomAu
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
        //echo "Hello from MW";
        $path= $request->path();
        //echo $path;
        if(($path=="login" || $path=="register") && (Session::get('user')))
        {
            return redirect('/');
        }
        else if($path!='login' && Session::get('user') && $path!='register' && Session::get('user'))
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
