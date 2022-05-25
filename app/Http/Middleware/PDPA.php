<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;

class PDPA {
	public function handle($request, Closure $next) {
		return $next($request);
	}
}
