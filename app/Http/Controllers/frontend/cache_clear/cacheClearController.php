<?php

namespace App\Http\Controllers\frontend\cache_clear;

use App\Http\Controllers\Controller;
use Artisan;

class cacheClearController extends Controller {
	public function cache_clear() {
		Artisan::call('route:clear');
		Artisan::call('cache:clear');
		Artisan::call('view:clear');
		Artisan::call('config:clear');
		Artisan::call('route:clear');
		return "cleared";
	}
}
