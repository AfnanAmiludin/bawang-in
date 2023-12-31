<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PenjualRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user()->id;
        $role = User::find($user)->userRole()->first();
        if (auth::check() && $role->name == "penjual") {
            return $next($request);
        } else {
            return response()->json([
                'message' => 'Not have access!!!'
            ], 404);
        }
    }
}
