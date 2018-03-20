<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;
use Closure;

class CheckActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->active==false) {
           //return redirect()->route('gameover');
            //return File::get(public_path() . '/gameover.html');
            abort(403);//Say Some Thing Or Direct To Somewhere When The User Sucks And Loses
        }
        return $next($request);
    }
}
