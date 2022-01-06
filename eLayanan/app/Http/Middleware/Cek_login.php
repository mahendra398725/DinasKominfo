<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('welcome');
        }
        $user=Auth::user();

        if ($user->id_post_role == $role) {
            return $next($request);           
        }
        return redirect('welcome ')->with('error',"Tidak ada akses");
    }
}
