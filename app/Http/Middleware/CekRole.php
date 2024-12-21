<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Events\ResponsePrepared;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // Ambil role pengguna yang sedang login
        $authUserRole = Auth::user()->role;

        // Jika role pengguna tidak sesuai dengan yang diperlukan, batasi akses
        if ($authUserRole !== $role) {
            abort(403); // Akses ditolak
        }

        // Jika semua validasi berhasil, izinkan melanjutkan request
        return $next($request);
    }
}
