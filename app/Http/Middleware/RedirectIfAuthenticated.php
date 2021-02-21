<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$guards=null)
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin-dashboard');
        }else if (Auth::guard('pegawai')->check()) {
            return redirect('/pegawai-profile');
        }else if (Auth::guard('masyarakat')->check()) {
            return redirect('/masyarakat-profile');
        }
        else{
            redirect('/masuk');
        }

        return $next($request);
    }
}
