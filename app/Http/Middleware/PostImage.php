<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class PostImage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $this->searchUser($request) ? $next($request) : response()->json('Unauthorized action',
            403);
    }

    protected function searchUser($request)
    {
        return (User::where('email', $request->email)->where('api_token', $request->api_token)->get()->count() > 0);
    }
}
