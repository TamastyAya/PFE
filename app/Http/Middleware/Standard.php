<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Standard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('web')->check()) { 
            Log::info('Pass control to the next middleware or route');
            return $next($request);
        }
        $userrole=Auth::guard('web')->user()->role;
        Log::info('User role: '.$userrole);
        if($userrole==3){
            Log::info('Redirecting to dashboard');
            return $next($request);
        }
        elseif($userrole==2){
            Log::info('Redirecting to admin');
            return redirect()->route('admin');
        }
        elseif ($userrole == 1 ){
            Log::info('Redirecting to superadmin');
            return redirect()->route('superadmin');
        }
        else {
            Log::info('Redirecting to default');
            return redirect()->route('default');
        }
    }
    
    
}
