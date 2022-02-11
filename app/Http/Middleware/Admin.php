<?php
namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Contracts\Routing\Middleware;

class Admin {
	public function handle($request, Closure $next) {
		if (!Auth::guard('admin')->check()) {
			return redirect('/backoffice');
		}
		return $next($request);
	}
}