<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyTokens
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
        $session_csrf_token = $request->session()->token();
        $form_csrf_token = $request->input('_token');

        if($session_csrf_token === $form_csrf_token){
            return $next($request);
        }else {
            abort(403, 'Unauthorized');
        }
    }
}
