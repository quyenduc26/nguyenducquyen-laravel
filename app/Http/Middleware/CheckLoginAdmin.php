<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo 'Middleware request'; 
        if (!$this->isLogin()){
            return redirect(route('home'));
        }

        if($request->is('admin/*') || $request->is('admin') ){
            echo'<h3>Khu vực quản trị</h3>';
        }
        return $next($request);
    }
    public function isLogin(){
        return true;
    }
}
