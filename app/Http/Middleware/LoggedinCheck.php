<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoggedinCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        session_start();
        $logged_in = $_SESSION['logedin'];
        if($logged_in == true){
            return $next($request);
        }
        else{
            echo "You must log in first";
            return redirect('/login');
        }
        
    }
}
