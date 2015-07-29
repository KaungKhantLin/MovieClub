<?php

namespace MovieCrazy\Http\Middleware;

use Closure;

class CheckAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (\Auth::check()) {
			return $next($request);
		} else {
			return view('auth.login')->withErrors('You are not logged in');
		}
	}
}
