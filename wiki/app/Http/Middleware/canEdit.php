<?php

namespace App\Http\Middleware;

use Closure;

class canEdit
{
    /**
     * Check if the current user is able to edit the article
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user->rank > 1) {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
